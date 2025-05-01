document.addEventListener('keydown', function (event){
    let key = event.key;
    let code = event.code;
    document.getElementById('keydown-event-output').innerHTML = `你按下了 ${key} 鍵，代碼是 ${code}`;
});

document.addEventListener('submit',function(event){
    event.preventDefault();
    let form = event.target;
    let formData = new FormData(form);

    console.log(formData.entries());

    let data = {};
    for (let [key, value] of formData.entries()) {
        data[key] = value;
    }

    document.getElementById('submit-event-output').innerHTML = JSON.stringify(data);
})


function handleClick(event) {
    alert('按钮被点击了');
}

let button = document.getElementById('remove-event-listener');
button.addEventListener('click', handleClick);
button.removeEventListener('click', handleClick);

let parent = document.getElementById('parent');
let child = document.getElementById('child');

parent.addEventListener('click', function () {
    alert('父元素被点击了');
});

child.addEventListener('click', function (event) {
    event.stopPropagation(); 
    alert('子元素被点击了');
});

let person = {
    name: '张三', age: 20, sayHello: function () {
        console.log(`Hello, my name is ${this.name}`);
    }, eat: function () {
        console.log(this.name + ' am eating');
    }
};

person.sayHello();
person.eat();
console.log(person.name);


function Person(name, age) {
    this.name = name;
    this.age = age;
}

let student = new Person('李四', 18);
console.log(student.name);


class Animal {
    constructor(name) {
        this.name = name;
    }

    sayHello() {
        console.log(`Hello, my name is ${this.name}`);
    }
}

let cat = new Animal('Tom'); 
cat.sayHello();

class Car {
    constructor(brand, price) {
        this.brand = brand;
        this.price = price;
    }

    run() {
        console.log(`${this.brand} is running`);
    }
}

let bmw = new Car('BMW', 300000);
console.log(bmw.brand);


class Dog extends Animal {
    bark() {
        console.log('汪汪汪');
    }
}

let dog = new Dog('旺财');
dog.sayHello();
dog.bark();

// JS 中的异步编程
// 同步代码, 顺序执行
// 异步代码, 不会阻塞后续代码执行
Promise, async/await, callback

let promise = new Promise((resolve, reject) => {
    setTimeout(() => {
       resolve('Hello, Promise');
    }, 2000); 
 });

 promise.then((value) => {
     console.log(value);
 });

console.log('Promise called');

async function fetchData() {
     // 通过 fetch 获取数据
     let response = await fetch('https://jsonplaceholder.typicode.com/posts');
/     // 转换为 JSON 格式
     let data = await response.json();
     console.log(data);
 }

 fetchData().then(r => console.log('fetchData done'));

console.log('fetchData called');

// 错误处理
try {
    $element = document.getElementById('not-exist');
    $element.addEventListener('click', function () {
        alert('元素被点击了');
    });
    console.log($element);
} catch (error) {
    console.error('发生错误: ' + error.message);
} finally {
    // 无论是否发生错误，都会执行
    console.log('finally');
}

// 自定义错误
function divide(a, b) {
    if (b === 0) {
        throw new Error('除数不能为 0. (这是一个自定义错误)');
    }
    return a / b;
}

try {
    console.log(divide(10, 0));
} catch (error) {
    console.error('发生错误: ' + error.message);
}


// DOM 操作
let heading = document.getElementById('heading');
console.log(heading.textContent);

let items = document.getElementsByClassName('item');
// console.log(items);
// console.log(items[0].textContent);
for (let item of items) {
    if (item.textContent === 'PHP') {
        item.style.color = 'red';
    }
    console.log(item.textContent);
}

let liElement = document.getElementsByTagName('li'); 
let liElementPython = document.getElementsByTagName('li')[1]; 
liElementPython.style.color = 'blue';

let itemElementJava = document.querySelector('.item'); /
itemElementJava.style.color = 'green';
itemElementJava.textContent = 'Go';
// let itemElementGo = itemElementJava

let itemElements = document.querySelectorAll('.item'); 
let itemElementJavaScript = document.querySelectorAll('.item')[2]; 
itemElements.forEach(function (item) {
    console.log(item.textContent);
});
itemElementJavaScript.style.color = 'purple';

// JS操作DOM
let getUserinfoElement = document.getElementById('get-userinfo');
getUserinfoElement.addEventListener('click', function () {
    
    let userinfo = {
        username: 'LuStormstout', email: 'lustromstout@gmail.com'
    }


    let userinfoElement = document.getElementById('userinfo');
    for (let key in userinfo) {
        let liElement = document.createElement("li")
        liElement.textContent = key + " : " + userinfo[key];
        userinfoElement.appendChild(liElement)
        console.log('key: ' + key + " value: " + userinfo[key])
    }
});
