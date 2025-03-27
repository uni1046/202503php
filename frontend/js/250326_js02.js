console.log("---------- for 循环 ----------");

for (let i = 0; i < 5; i++) {
    console.log("当前值为：" + i)
}

console.log("---------- while 循环 ----------");

let i = 0;
while (i < 5){
    console.log('当前值为：' + i);
    i++
}

console.log("---------- do while 循环 ----------");

let j = 0
do {
    console.log("当前值为：" + j);
    j++
} while(j < 5);

console.log("---------- for in 循环 ----------");

let userinfo = {
    username: "张三", age:20, city:"东京"
};

//for
let phones = ["三星", "小米", "iphone"];
 //for (let i = 0; i < phones.length; i++) {
   //  console.log(phones[i]);
 //};

 //console.log( userinfo ["city"] );
 console.log(phones[0]);

 for (let key in userinfo) {
    console.log(key + ": " + userinfo[key]);
};

console.log("---------- for of 循环 ----------");

for (let phone of phones) {
    console.log(phones);
}

let username = "Lu";

for (let byte of username) {
    console.log(byte);
}

console.log("---------- break ----------");

for (let i = 0; i <= 10; i++) {
    if (i === 3) {
        break;
    }
    console.log("当前值为：" + i);
}

console.log("---------- continue ----------");

for (let i = 0; i <= 10; i++) {
    if (i === 5) {
        continue;
    }
    console.log("当前值为：" + i);
}

console.log("---------- 函数的参数 ----------");

function sayHello(name = "张三") {
    console.log("你好, " + name);
}

sayHello("李四");
sayHello();

function sayHi(name, age, callback) {
    console.log("你好, " + name + ", 今年" + age + "岁");
    callback();
}

sayHi("王五", 25, function () {
    
    console.log();
});

function sumAll(...args) {
    // console.log(typeof args);
    // console.log(args);

    let sum = 0;
    for (let arg of args) {
        sum += arg + 3 ;
    }
    return sum;
}

console.log(sumAll(1, 3, 4, 5, 100));



console.log("---------- 参数的解构赋值 ----------");

function printInfo({name, age}) {
    console.log("姓名：" + name + ", 年龄：" + age);
}

let user = {name: "张三", age: 20};
printInfo(user);



function sayGoodbye() {
     return "再见";
}

let goodbye = sayGoodbye();
console.log(goodbye); 


document.getElementById("btn-onclick").onclick = function () {
    alert("这是鼠标点击事件");
}

document.getElementById("btn-dblclick").ondblclick = function () {
    alert("这是鼠标双击事件");
}


document.getElementById("btn-mouseover").onmouseover = function () {
    document.getElementById("btn-mouseover").style.backgroundColor = "#FF0080";
}
document.getElementById("btn-mouseover").onmouseout = function () {
    document.getElementById("btn-mouseover").style.backgroundColor = "#FF0080";
}

document.getElementById("username").onfocus = function () {
    document.getElementById("username").style.backgroundColor = "#FF0080";
}
document.getElementById("username").onblur = function () {
    document.getElementById("username").style.backgroundColor = "#FF0080";
}
