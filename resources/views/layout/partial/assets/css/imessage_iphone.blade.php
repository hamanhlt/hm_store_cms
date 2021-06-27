@section('style_head')
    @parent
    <style>
        div.chat * {
            transition: all .5s;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        div.chat {
            margin: 0;
            cursor: default;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Chrome/Safari/Opera */
            -khtml-user-select: none; /* Konqueror */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* IE/Edge */
            user-select: none;
        }

        div.chat span.spinner {
            -moz-animation: loading-bar 1s 1;
            -webkit-animation: loading-bar 1s 1;
            animation: loading-bar 1s 1;
            display: block;
            height: 2px;
            background-color: #00e34d;
            transition: width 0.2s;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 4
        }

        div.chat .messages {
            display: block;
            overflow-x: hidden;
            position: relative;
            height: 90%;
            width: 100%;
            padding: 2% 3%;
            border-bottom: 1px solid #ecf0f1;
        }

        div.chat ::-webkit-scrollbar {
            width: 3px;
            height: 1px;
            transition: all .5s;
            z-index: 10;
        }

        div.chat ::-webkit-scrollbar-track {
            background-color: white;
        }

        div.chat ::-webkit-scrollbar-thumb {
            background-color: #bec4c8;
            border-radius: 3px;
        }

        div.chat .message {
            display: block;
            width: 98%;
            padding: 0.5%;
        }

        div.chat .message p {
            margin: 0;
        }

        div.chat .myMessage,
        div.chat .fromThem {
            max-width: 50%;
            word-wrap: break-word;
            margin-bottom: 20px;
        }

        div.chat .message:hover .myMessage {
            -webkit-transform: translateX(-130px);
            transform: translateX(-130px);
        }

        div.chat .message:hover .fromThem {
            -webkit-transform: translateX(130px);
            transform: translateX(130px);
        }

        div.chat .message:hover date {
            opacity: 1;
        }

        div.chat .myMessage, .fromThem {
            position: relative;
            padding: 10px 20px;
            color: white;
            border-radius: 25px;
            clear: both;
            font: 400 15px 'Open Sans', sans-serif;
        }

        div.chat .myMessage {
            background: #00e34d;
            color: white;
            float: right;
            clear: both;
            border-bottom-right-radius: 20px 0px \9;
        }

        div.chat .myMessage:before {
            content: "";
            position: absolute;
            z-index: 1;
            bottom: -2px;
            right: -8px;
            height: 19px;
            border-right: 20px solid #00e34d;
            border-bottom-left-radius: 16px 14px;
            -webkit-transform: translate(0, -2px);
            transform: translate(0, -2px);
            border-bottom-left-radius: 15px 0px \9;
            transform: translate(-1px, -2px) \9;
        }

        div.chat .myMessage:after {
            content: "";
            position: absolute;
            z-index: 1;
            bottom: -2px;
            right: -42px;
            width: 12px;
            height: 20px;
            background: white;
            border-bottom-left-radius: 10px;
            -webkit-transform: translate(-30px, -2px);
            transform: translate(-30px, -2px);
        }

        div.chat .fromThem {
            background: #E5E5EA;
            color: black;
            float: left;
            clear: both;
            border-bottom-left-radius: 30px 0px \9;
        }

        div.chat .fromThem:before {
            content: "";
            position: absolute;
            z-index: 2;
            bottom: -2px;
            left: -7px;
            height: 19px;
            border-left: 20px solid #E5E5EA;
            border-bottom-right-radius: 16px 14px;
            -webkit-transform: translate(0, -2px);
            transform: translate(0, -2px);
            border-bottom-right-radius: 15px 0px \9;
            transform: translate(-1px, -2px) \9;
        }

        div.chat .fromThem:after {
            content: "";
            position: absolute;
            z-index: 3;
            bottom: -2px;
            left: 4px;
            width: 26px;
            height: 20px;
            background: white;
            border-bottom-right-radius: 10px;
            -webkit-transform: translate(-30px, -2px);
            transform: translate(-30px, -2px);
        }

        div.chat date {
            position: absolute;
            top: 10px;
            font-size: 14px;
            white-space: nowrap;
            vertical-align: middle;
            color: #8b8b90;
            opacity: 0;
            z-index: 4;
        }

        div.chat .myMessage date {
            left: 105%;
        }

        div.chat .fromThem date {
            right: 105%;
        }

        div.chat input {
            font: 400 13px 'Open Sans', sans-serif;
            border: 0;
            padding: 0 15px;
            height: 10%;
            outline: 0;
        }

        div.chat input[type='text'] {
            width: 73%;
            float: left;
        }

        div.chat input[type='button'] {
            width: 23%;
            background: transparent;
            color: #00E34D;
            font-weight: 700;
            text-align: right;
            float: right;
        }

        div.chat .myMessage, div.chat .fromThem {
            font-size: 12px;
        }

        div.chat .message:hover .myMessage {
            transform: translateY(18px);
            -webkit-transform: translateY(18px);
        }

        div.chat .message:hover .fromThem {
            transform: translateY(18px);
            -webkit-transform: translateY(18px);
        }

        div.chat .myMessage date, div.chat .fromThem date {
            top: -20px;
            left: auto;
            right: 0;
            font-size: 12px;
        }

        div.chat .myMessage,
        div.chat .fromThem {
            max-width: 90%;
        }

        @-moz-keyframes loading-bar {
            0% {
                width: 0%;
            }
            90% {
                width: 90%;
            }
            100% {
                width: 100%;
            }
        }

        @-webkit-keyframes loading-bar {
            0% {
                width: 0%;
            }
            90% {
                width: 90%;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes loading-bar {
            0% {
                width: 0%;
            }
            90% {
                width: 90%;
            }
            100% {
                width: 100%;
            }
        }

        /* DEMO */
        .iphone {
            width: 300px;
            height: 609px;
            background-image: url('http://www.adobewordpress.com/tasarim/images/iphone6.png');
            background-size: 100% 100%;
            margin: 0 auto;
            position: relative;
        }

        .border {
            position: absolute;
            top: 12.3%;
            right: 7%;
            left: 7%;
            bottom: 12%;
            overflow: hidden;
        }

        a.article {
            position: fixed;
            bottom: 15px;
            left: 15px;
            display: table;
            text-decoration: none;
            color: white;
            background-color: #00e34d;
            padding: 10px 20px;
            border-radius: 25px;
            font: 400 15px 'Open Sans', sans-serif;
        }
    </style>
@endsection
