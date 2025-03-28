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
