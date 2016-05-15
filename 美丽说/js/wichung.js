/**
 * 根据元素的class查找元素
 * @param className 查找的类的名字
 * @param context 查找的范围
 * @param tag 限定的标签名
 */
function getByClass(className, context, tag){
    var aResult = [];
    context = context || document;//如果传了context参数，就使用该参数，否则默认document
    if(document.getElementsByClassName && !tag){
        return context.getElementsByClassName(className);
    }

    tag = tag || '*';//如果传了tag参数，就使用该参数，否则默认是所有标签
    var aElem = context.getElementsByTagName(tag);
    for(var i=0; i<aElem.length; i++){
        //if(aElem[i].className == className){
        var re = new RegExp("\\b" + className + "\\b");
        if( re.test(aElem[i].className) ){//使用正则来判断当前元素的className中是否包含指定的className
            aResult.push(aElem[i]);
        }
    }

    return aResult;
}

/**
 * 修改或获取一个元素的样式
 * @param elem 要修改的元素对象
 * @param name 属性名
 * @param value 属性值
 */
function css(elem, attr, value){
    if(!elem || typeof elem != "object") return;
    if(arguments.length == 2){
        if(typeof attr == "string"){
            return _getStyle(elem, attr);//elem.style[attr];
        }else if(typeof attr == "object"){
            for(prop in attr){
                setCss(prop, attr[prop]);
                // elem.style[prop] = attr[prop];
            }
        }
    }else if(arguments.length == 3){
        setCss(attr, value);
    }

    function setCss(attr, value){
        switch(attr){
            case 'width':
            case 'height':
            case 'padding':
            case 'paddingLeft':
            case 'paddingRight':
            case 'paddingTop':
            case 'paddingBottom':
                value = /\%/.test(value)?value:Math.max(parseInt(value), 0) + 'px';
                break;
            case 'left':
            case 'top':
            case 'bottom':
            case 'right':
            case 'margin':
            case 'marginLeft':
            case 'marginRight':
            case 'marginTop':
            case 'marginBottom':
                value = /\%/.test(value)?value:parseInt(value) + 'px';
                break;
        }
        elem.style[attr] = value;
    }
}

function _getStyle( elem, name ) {//text-align, textAlign
    // If the property exists in style[], 
    //   then it’s been set recently (and is current)
    //先将text-align => textAlign
    name = name.replace(/-[a-z]/g, function(word){
        return word.substring(1).toUpperCase();
    });

    if (elem.style[name])
        return elem.style[name];

    // Otherwise, try to use IE’s method
    else if (elem.currentStyle)
        return elem.currentStyle[name];

    // Or the W3C’s method, if it exists
    else if (document.defaultView && document.defaultView.getComputedStyle) {
        // It uses the traditional ‘text-align’ style of rule writing, 
        //   instead of textAlign
        name = name.replace(/([A-Z])/g, "-$1");// textAlign =>  text-Align
        name = name.toLowerCase(); //text-Align => text-align

        // Get the style object and get the value of the property (if it exists)
        var s = document.defaultView.getComputedStyle(elem,"");
        return s && s.getPropertyValue(name);

    // Otherwise, we’re using some other browser
    } else
        return null;
}

/**
    动画
    @param attr 是一个对象
*/
function animate(elem, attr, callback){
    clearInterval(elem.timer);
    elem.timer = setInterval(function(){
        var bStop = true;//一个标识位，值为true是代表需要停止定时器，为false不需要停止
        for(var prop in attr){//取出所有attr对象中的属性
            var currentStyle;

            if(prop == 'opacity'){//如果prop是opacity
                currentStyle = parseInt(css(elem, prop)*100);//那么将获取出来的当前值转换成为百分制
            }else{
                currentStyle = parseInt(css(elem, prop));
            }

            var speed = (attr[prop] - currentStyle) / 8;
            speed = speed < 0 ? Math.floor(speed) : Math.ceil(speed);


            if(currentStyle != attr[prop]){
                bStop = false;
            }

            currentStyle += speed;
            if(prop == 'opacity'){
                elem.style.opacity = currentStyle / 100;
                elem.style.filter = "alpha(opacity:"+currentStyle+")";
            }else{
                elem.style[prop] = currentStyle + 'px';
            }
        }

        if(bStop){
            clearInterval(elem.timer);
            if(callback) callback();
        }
    }, 30);
}

function addEvent(elem, type, handler){
    if(elem.addEventListener){
        elem.addEventListener(type, handler, false);
    }else if(elem.attachEvent){
        elem['temp' + type + handler] = handler;
        elem[type + handler] = function(){
            elem['temp' + type + handler].call(elem);
        };
        elem.attachEvent('on' + type, elem[type + handler]);
        
    }else{
        elem['on' + type] = handler;
    }
}