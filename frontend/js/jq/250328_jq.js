//选择器

//$('#title').hide(); // 隐藏元素

$("#header").css("background-color", "#B2B2B2"); // 设置元素的样式

$(".content").addClass('active');// 添加类名

//$("p").text('hello world！')

$("*").css("margin", "0"); // 设置所有元素的

//$("h1, p, .note").hide(); // 隐藏多个元素

$("p .note").css("color", "red"); // 设置后代元素的样式（后代的后代也影响）

// 直接子元素选择器(>), 会选择 class 为 content-5 的元素下面的所有 span 元素
$(".content-5 > span").css("color", "#00FF00"); 

// 兄弟选择器(+), 会选择 class 为 content-2 的元素后面的第一个 p 元素
$("#content-2 + p").css("color", "#e522dd");

//内容操作

// .html 和 .text 方法都可以用于获取元素的内容, 但是 .html 方法会返回元素的 HTML 内容, 而 .text 方法会返回元素的文本内容, 设置的时候也是一样的, .html 方法会设置元素的 HTML 内容, 而 .text 方法会设置元素的文本内容
// 获取元素
let titleElement = $("#title");

// 获取或设置 HTML 内容
let html = titleElement.html();

// 获取元素的文本内容
let text = titleElement.text();
console.log(html, text);

// 设置元素的 HTML 内容, 会覆盖原有标签内的内容
let content6 = $("#content-6")
content6.html("<h2>这是一个标题</h2>");
//content6.text("<h1>这是标题2</h1>"); // 设置元素的文本内容, 会覆盖原有标签内的内容

// .val 方法用于获取或设置表单元素的值
let input = $("#input-1");
let value = input.val();
console.log(value);
input.val("hello world!");

// .attr 方法用于获取或设置元素的属性
let link = $("#link-1");
let href = link.attr("href");
console.log(href);
link.attr("href", "https://lustormstout.com");
link.text("跳转到 Lustormstout");

let input2 = $("#input-2");
input2.removeAttr("disabled");
input2.removeAttr("placeholder");

let optionChengdu = $("#city option[value='chengdu']");
let isSelected= optionChengdu.prop("selected");
console.log(isSelected);

let main = $("#main");
 main.append("<h1>我在最后面添加了一个标题</h1>");
 main.prepend("<h1>我在最前面添加了一个标题</h1>");

let mainlist = $("#main-ul");
mainlist.prepend("<li>这是第零个 li</li>");
mainlist.append("<li>这是第六个 li</li>");
mainlist.after("<p>这是一个 p 标签</p>");
mainlist.before("<p>这是一个 p 标签</p>");
//mainlist.children()[0].remove(); 
//mainlist.empty(); // 移除所有的 li, 但是保留了 ul 标签

// 事件操作
// .on 方法用于绑定事件,
let btn2 = $("#btn-2");
btn2.on("click", function () {
    alert("Hello World!");
});
btn2.on("mouseover", function () {
    btn2.css("background-color", "#5df8e3");
});
btn2.on("mouseout", function () {
    btn2.removeAttr("style");
});

// .one只会执行一次
let btn3 = $("#btn-3");
btn3.one("click", function () {
    alert("Hello World!");
});

// .focus 方法用于绑定 focus 事件
let input3 = $("#input-3");

input3.focus(function () {
    input3.attr("value", "");
});

$("#input3").val("");

// .off 方法用于解绑事件
function clickHandler() {
    alert("这是 btn 4 的 click 事件");
}

let btn4 = $("#btn-4");
btn4.on("click", clickHandler);
//btn4.off("click", clickHandler);

let btn5 = $("#btn-5");
btn5.on("click", function (event) {
    console.log(event);
    console.log(event.target);
    console.log(event.currentTarget);
    console.log(event.type);
    console.log(event.clientX, event.clientY);
});

// 事件委托
let list = $("#list");
list.on("click", "li", function () {
    alert("点击了列表项：" + $(this).text());
});

// 动画操作
// .hide 方法用于隐藏元素
// .show 方法用于显示元素
// .toggle 方法用于切换元素的显示和隐藏
// .fadeIn 方法用于淡入元素
// .fadeOut 方法用于淡出元素
// .fadeToggle 方法用于切换元素的淡入和淡出
// .slideUp 方法用于滑动隐藏元素
// .slideDown 方法用于滑动显示元素
// .slideToggle 方法用于切换元素的滑动显示和隐藏
let box = $("#box");
box.hide('slow');
box.hide();
box.show('slow');

let box2 = $("#box-2");
box2.hide();
let toggleBox2Btn = $("#toggle-box-2");
toggleBox2Btn.on("click", function () {
    box2.toggle();
});

let box3 = $("#box-3");
box3.fadeOut(1000);
box3.fadeIn(2000);
box3.fadeTo(1000, 0.5);

list.hide();
list.slideDown(3000); 
list.slideUp(3000); 
list.slideToggle(3000); 


// Ajax 操作
let ajaxbtn = $("#ajax-btn");
let ajaxContentUl = $("#ajax-content-ul");


ajaxbtn.on("click", function () {
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        method: "GET",
        dataType: "json",
        success: function (data) {
            data.forEach(function (item) {
                ajaxContentUl.append(
                    "<li>UserID: " + item.userId +
                    ", ID: " + item.id +
                    ", Title: " + item.title +
                    ", Body: " + item.body + "</li>");
            });
        },
        error: function (error) {
            console.log(error.message);
        }
    });
});

ajaxbtn.get(
    "https://jsonplaceholder.typicode.com/posts",
     function (data) {
        data.forEach(function (item) {
             ajaxContentUl.append(
                 "<li>UserID: " + item.userId +
                 ", ID: " + item.id +
                 ", Title: " + item.title +
                 ", Body: " + item.body + "</li>");
        });
     },
    "json"
 ).success(function () {
     console.log("请求成功");
 }).error(function () {
     console.log("请求失败");
 });

ajaxbtn.on("click", function () {
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        method: "POST",
        dataType: "json",
        formData: {
            userId: 1,
            title: "Hello World!",
            body: "Hello World!"
        },
        success: function (data) {
            console.log(data);
        },
        error: function (error) {
            console.log(error.message);
        }
    });
});

