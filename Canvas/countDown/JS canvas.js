/*
把endTime取消注释并且getSeconds函数取消注释 就可变为倒计时
*/
    var WINDOW_WIDTH,
        WINDOW_HEIGHT,
        RADIUS,         //半径
        MARGIN_TOP,             //上边距
        MARGIN_LEFT;           //左边距
//const endTime = new Date(2017,6,22,12,50,0);  //月份从0开始  //截止时间,他和当前时间相减，得到倒计时时间
    var curShowTimeSeconds = 0;       //当前秒数

    var balls = [];
    var colors = ["#33B5E5", "#0099CC", "#AA66CC", "#9933CC", "#99CC00", "#669900", "#FFBB33", "#FF8800", "#FF4444", "#CC0000"]; //随机颜色

    window.onload = function () {
        var canvas = document.getElementById("canvas");
        var context = canvas.getContext("2d");
/*        WINDOW_WIDTH = document.body.clientWidth || document.documentElement.clientWidth;
        WINDOW_HEIGHT = document.body.clientHeight || document.documentElement.clientHeight;*/
        WINDOW_WIDTH=500;
        WINDOW_HEIGHT=500;
        MARGIN_LEFT = Math.round(WINDOW_WIDTH / 10);
        MARGIN_TOP = Math.round(WINDOW_HEIGHT / 5)
        RADIUS = Math.round(WINDOW_WIDTH * 4 / 5 / 108) - 1;

        canvas.width = WINDOW_WIDTH;
        canvas.height = WINDOW_HEIGHT;
        curShowTimeSeconds = getSeconds();
        setInterval(                    //设置动画效果
            function () {
                /*           render(context);
                 update();           //对数据进行调整*/
                if (!document.hidden)            //判断用户是否在当前页面，解决小球堆积的问题
                {
                    render(context);
                    update();
                }
            }
            , 50
        );

    };

    function update() {
        var nextShowTimeSeconds = getSeconds();       //下一次显示的时间

        var nextHours = parseInt(nextShowTimeSeconds / 3600);
        var nextMinutes = parseInt(nextShowTimeSeconds - nextHours * 3600) / 60;
        var nextSeconds = nextShowTimeSeconds % 60;


        var curHours = parseInt(curShowTimeSeconds / 3600);
        var curMinutes = parseInt(curShowTimeSeconds - nextHours * 3600) / 60;
        var curSeconds = curShowTimeSeconds % 60;

        if (nextSeconds != curSeconds) {
            if (parseInt(curHours / 10) != parseInt(nextHours / 10)) {

                addBalls(MARGIN_LEFT + 0, MARGIN_TOP, parseInt(curHours / 10));
            }
            if (parseInt(curHours % 10) != parseInt(nextHours % 10)) {

                addBalls(MARGIN_LEFT + 15 * (RADIUS + 1), MARGIN_TOP, parseInt(curHours / 10));
            }
            if (parseInt(curMinutes / 10) != parseInt(nextMinutes / 10)) {

                addBalls(MARGIN_LEFT + 39 * (RADIUS + 1), MARGIN_TOP, parseInt(curMinutes / 10));
            }
            if (parseInt(curMinutes % 10) != parseInt(nextMinutes % 10)) {

                addBalls(MARGIN_LEFT + 54 * (RADIUS + 1), MARGIN_TOP, parseInt(curHours % 10));
            }
            if (parseInt(curSeconds / 10) != parseInt(nextSeconds / 10)) {

                addBalls(MARGIN_LEFT + 78 * (RADIUS + 1), MARGIN_TOP, parseInt(curSeconds / 10));
            }
            if (parseInt(curSeconds % 10) != parseInt(nextSeconds % 10)) {

                addBalls(MARGIN_LEFT + 93 * (RADIUS + 1), MARGIN_TOP, parseInt(nextSeconds % 10));
            }
            curShowTimeSeconds = nextShowTimeSeconds;
        }
        updateBalls();
        console.log(balls.length)   //打印小球个数
    }

    function updateBalls() {

        for (var i = 0; i < balls.length; i++) {

            balls[i].x += balls[i].vx;
            balls[i].y += balls[i].vy;
            balls[i].vy += balls[i].g;

            if (balls[i].y >= WINDOW_HEIGHT - RADIUS) {
                balls[i].y = WINDOW_HEIGHT - RADIUS;
                balls[i].vy = -balls[i].vy * 0.75;
            }
        }
        /*for (var i = 0, j = 0; i < len; i++) {
         if (balls[i].x + RADIUS > 0 && balls[i].x - RADIUS < CANVASWIDTH) {
         balls[j++] = balls[i];
         }
         }
         balls.length = Math.min(len, j);*/
        var cnt = 0
        for (var i = 0; i < balls.length; i++)
            if (balls[i].x + RADIUS > 0 && balls[i].x - RADIUS < WINDOW_WIDTH)
                balls[cnt++] = balls[i]

        while (balls.length > cnt) {
            balls.pop();
        }
    }

    function addBalls(x, y, num) {

        for (var i = 0; i < digit[num].length; i++)
            for (var j = 0; j < digit[num][i].length; j++)
                if (digit[num][i][j] == 1) {
                    var aBall = {
                        x: x + j * 2 * (RADIUS + 1) + (RADIUS + 1),
                        y: y + i * 2 * (RADIUS + 1) + (RADIUS + 1),
                        g: 1.5 + Math.random(),
                        vx: Math.pow(-1, Math.ceil(Math.random() * 1000)) * 4,
                        vy: -5,
                        color: colors[Math.floor(Math.random() * colors.length)]
                    }

                    balls.push(aBall)
                }
    }


    function getSeconds() {
        var curTime = new Date();	//当前时间
        /*    var res=endTime.getTime()-curTime.getTime()     //倒计时时间
         res=Math.round(res/1000); //毫秒转化成秒

         return res >=0 ? res:0	//如果ret>=0则返回ret 否则返回0*/

        var res = curTime.getHours() * 3600 + curTime.getMinutes() * 60 + curTime.getSeconds();

        return res;


    }

    function render(cxt) {
        cxt.clearRect(0, 0, WINDOW_WIDTH, WINDOW_HEIGHT);          //为了防止cur和next帧的重叠,用clearRect来对数据进行刷新
        var hours = parseInt(curShowTimeSeconds / 3600);           //当前的秒数除3600得到小时，并取整
        var minutes = parseInt(curShowTimeSeconds - hours * 3600) / 60;     // 当前的秒数减去hours代表的秒数 除以60得道到分钟
        var seconds = curShowTimeSeconds % 60;     //求余得到秒数

        renderDigit(MARGIN_LEFT, MARGIN_TOP, parseInt(hours / 10), cxt)
        //参数:1,2是位置 3是绘制数字 4是绘制环境
        renderDigit(MARGIN_LEFT, MARGIN_TOP, parseInt(hours / 10), cxt)
        renderDigit(MARGIN_LEFT + 15 * (RADIUS + 1), MARGIN_TOP, parseInt(hours % 10), cxt)
        renderDigit(MARGIN_LEFT + 30 * (RADIUS + 1), MARGIN_TOP, 10, cxt)
        renderDigit(MARGIN_LEFT + 39 * (RADIUS + 1), MARGIN_TOP, parseInt(minutes / 10), cxt);
        renderDigit(MARGIN_LEFT + 54 * (RADIUS + 1), MARGIN_TOP, parseInt(minutes % 10), cxt);
        renderDigit(MARGIN_LEFT + 69 * (RADIUS + 1), MARGIN_TOP, 10, cxt);
        renderDigit(MARGIN_LEFT + 78 * (RADIUS + 1), MARGIN_TOP, parseInt(seconds / 10), cxt);
        renderDigit(MARGIN_LEFT + 93 * (RADIUS + 1), MARGIN_TOP, parseInt(seconds % 10), cxt);

        for (var i = 0; i < balls.length; i++) {
            cxt.fillStyle = balls[i].color;
            cxt.beginPath();
            cxt.arc(balls[i].x, balls[i].y, RADIUS, 0, 2 * Math.PI, true);
            cxt.closePath();
            cxt.fill();

        }
    }


    function renderDigit(x, y, num, cxt) {
        cxt.fillStyle = "rgb(0,102,153)";
        for (var i = 0; i < digit[num].length; i++)
            for (var j = 0; j < digit[num][i].length; j++)
                if (digit[num][i][j] == 1) {
                    cxt.beginPath();
                    cxt.arc(x + j * 2 * (RADIUS + 1) + (RADIUS + 1), y + i * 2 * (RADIUS + 1) + (RADIUS + 1), RADIUS, 0, 2 * Math.PI);
                    cxt.closePath();
                    cxt.fill()
                }
    }


