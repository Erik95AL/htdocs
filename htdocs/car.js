class Car {
	constructor(marca) {
		this.brand = marca;
		this.matricula = Car.generateMatricula();
	}
	show() {
		if (this.brand == "Seat") {
			return "es una marca X";
		} else {
			return this.brand + " " + this.matricula;
		}
	}
	static generateMatricula() {
		return Math.floor(Math.random() * (9999 + 1 - 1000) + 1000);
	}
}

Car.generateMatricula;

coche1 = new Car("Seat", "123");
coche2 = new Car("Ford", "456");
coche3 = new Car("Renault", "789");

console.log(coche1.brand + " " + coche1.matricula);
console.log(coche2.brand + " " + coche2.matricula);
console.log(coche3.brand + " " + coche3.matricula);

console.log(coche1.show());
console.log(coche2.show());
console.log(coche3.show());
