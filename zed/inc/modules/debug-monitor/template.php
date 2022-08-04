<?php

function zed_dbg_mon_style() {
	?>
    <style>
        .zd-dm {
            position: fixed;
            bottom: 0;
            right: 0;
            padding: 10px;
            border: 1px solid #eee;
            background-color: rgba(255, 255, 255, .5);
            border-radius: 10px 0 0 0;
            backdrop-filter: blur(3px);
            transition: all .5s;
            overflow: auto;
            overscroll-behavior: contain;
        }

        .zd-dm:hover {
            background-color: rgba(255, 255, 255, .95);
        }

        .zd-dm_show {
            left: 50%;
            top: 50%;
        }

        .zd-dm__title {
            color: #333;
            font-weight: bold;
        }

        .zd-dm__title:hover {
            color: #7d24ff;
            cursor: pointer;
        }

        .zd-dm__content {
            display: block;
            position: absolute;
            right: 10000px;
            opacity: 0;
            transition: all .5s;
            /*border: 1px solid #eee;*/
        }

        .zd-dm_show .zd-dm__content {
            position: relative;
            right: auto;
            opacity: 1;
        }

        .zd-dm__close {
            position: absolute;
            right: 10px;
            top: 7px;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .zd-dm__close-roll {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid grey;
            border-radius: 2px;
        }

        .zd-dm__close-roll:hover {
            border-color: black;
        }

        .zd-dm__close_down .zd-dm__close-roll {
            top: auto;
            height: 5px;
        }
    </style>
    <style>
        .zd-msg {
            margin: 10px;
            padding: 15px;
            background-color: #eee;
            font-size: 1.1rem;
        }
    </style>
    <style>
        .z-data-item {
            margin: 10px 0;
            font-size: .9rem;
            border-radius: 5px 5px 0 0;
            border: 1px solid #eee;
        }

        .z-data-item__top {
            position: relative;
            background-color: #eee;
            padding: 5px 10px;
            font-weight: bold;
        }

        .z-data-item__bottom {
            background-color: #fff;
            padding: 5px 10px;
        }

    </style>
	<?php
}

function zed_dbg_mon_template( $args = null ) {
	if ( ! $args || ! $args['content'] ) {
		$typeof          = gettype( $args['content'] );
		$args['content'] = '<div class="zd-msg">Нет данных для отображения, но входящее ни что, являет собой: (' . $typeof . ')</div>';
	}
	?>
    <div class="zd-dm<?php echo $args['class']; ?>">
        <div class="zd-dm__title">
            ZED
        </div>
        <div class="zd-dm__content">
			<?php echo $args['content']; ?>
        </div>
    </div>
	<?php
}

function zed_dbg_mon_script() {
	?>
    <script>
        !function ($) {
            'use strict';

            console.log('Hi! I\'am Zed Debug Monitor.');

            const $mon = $('.zd-dm');
            const $title = $('.zd-dm__title');
            const $zdToggleBut = $('.zd--toggle');
            const selectorItem = '.z-data-item';

            $title.on('click', function (e) {
                $mon.toggleClass('zd-dm_show');
            });

            $zdToggleBut.on('click', function (e) {
                let $this = $(this);
                let selector = $this.data('toggle');
                $this.closest(selectorItem).find(selector).toggle();
                $this.toggleClass('zd-dm__close_down');
            });

        }(jQuery)
    </script>
	<?php
}

