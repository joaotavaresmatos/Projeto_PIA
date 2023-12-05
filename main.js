// RELOGIOOO

const time = document.getElementById("time");
const dia = document.getElementById("dia");
const meio = document.getElementById("meio");

let clock = setInterval(
	function calcTime() {
		let date_now = new Date();
		let hr = date_now.getHours();
		let min = date_now.getMinutes();
		let sec = date_now.getSeconds();
		let middayValue = "AM";

		let days = [
			"Domingo",
			"Segunda-feira",
			"Terça-feira",
			"Quarta-feira",
			"Quinta-feira",
			"Sextou BB",
			"Sábado"
		];

		dia.textContent = days[date_now.getDay()];

		middayValue = hr >= 24 ? "PM" : "AM";

		if (hr == 0) {
			hr = 24;
		} else if (hr > 24) {
			hr -= 24;
		}

		hr = hr < 10 ? "0" + hr : hr;
		min = min < 10 ? "0" + min : min;
		sec = sec < 10 ? "0" + sec : sec;

		time.textContent = hr + ":" + min + ":" + sec;
		meio.textContent = middayValue;
	},

	1000
);
// RELOGIOOO



// TEXTO ANIMAÇÃO
class TextScramble {
	constructor(el) {
	  this.el = el
	  this.chars = '!<>-_\\/[]{}—=+*^?#________'
	  this.update = this.update.bind(this)
	}
	setText(newText) {
	  const oldText = this.el.innerText
	  const length = Math.max(oldText.length, newText.length)
	  const promise = new Promise((resolve) => this.resolve = resolve)
	  this.queue = []
	  for (let i = 0; i < length; i++) {
		const from = oldText[i] || ''
		const to = newText[i] || ''
		const start = Math.floor(Math.random() * 40)
		const end = start + Math.floor(Math.random() * 40)
		this.queue.push({ from, to, start, end })
	  }
	  cancelAnimationFrame(this.frameRequest)
	  this.frame = 0
	  this.update()
	  return promise
	}
	update() {
	  let output = ''
	  let complete = 0
	  for (let i = 0, n = this.queue.length; i < n; i++) {
		let { from, to, start, end, char } = this.queue[i]
		if (this.frame >= end) {
		  complete++
		  output += to
		} else if (this.frame >= start) {
		  if (!char || Math.random() < 0.28) {
			char = this.randomChar()
			this.queue[i].char = char
		  }
		  output += `<span class="dud">${char}</span>`
		} else {
		  output += from
		}
	  }
	  this.el.innerHTML = output
	  if (complete === this.queue.length) {
		this.resolve()
	  } else {
		this.frameRequest = requestAnimationFrame(this.update)
		this.frame++
	  }
	}
	randomChar() {
	  return this.chars[Math.floor(Math.random() * this.chars.length)]
	}
  }
 
  const phrases = [
	'Olá',
	'Seja bem vindo',
	'Ao site',
	'kaue careca',
	'Faça seu login',
	'E seja feliz !!!',
  ]
  
  const el = document.querySelector('.text')
  const fx = new TextScramble(el)
  
  let counter = 0
  const next = () => {
	fx.setText(phrases[counter]).then(() => {
	  setTimeout(next, 1200)
	})
	counter = (counter + 1) % phrases.length
  }
  
  next()
  // TEXTO ANIMAÇÃO