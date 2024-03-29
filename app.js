import "/src/scss/style.scss";
import { WORDS } from "/src/js/words";
import { SCHEME } from "/src/js/scheme";
// import ProgressBar from "/src/js/progressbar.min.js";

document.addEventListener('DOMContentLoaded', () => {
	let area = document.getElementById('area');
	let selectingWord = [];
	let selectingPrevLetter = [];
	let lastSelectedWord = [];
	let wordsInGame = [];
	let schemeInGame = '';
	let gridSize = 6;
	let wordColors = ['7FB5B5', 'A18594', 'B39F7A', '3EB489', 'F9F8BB', 'FFC1CC', 'BADBAD', 'FFCF48', 'CCCCFF', 'DAD871'];
	// let xp = 0;
	let bar;
	let copyWordColors;

	// TODO
	// Запрет на использование слов повторно
	// Запрет на выделение ячеек через ячейку с найденным словом

	const mainTitle = document.querySelector('.main-title');
	const inputedWord = document.querySelector('.inputed-word');

	const modalUnknownWord = document.getElementById("modal-unkown-word");
	const modalOtherPath = document.getElementById("modal-other-path");
	const modalWin = document.getElementById("modal-win");
	const modalDesc = document.getElementById("modal-word-desc");

	const btnSettings = document.querySelector(".js-settings");
	const btnAbout = document.querySelector(".js-about");
	const btnPlay = document.querySelectorAll(".js-play");
	const btnBack = document.querySelectorAll(".js-back");
	const btnNextLevel = document.querySelectorAll(".js-next-level");
	const btnNextLevelModal = document.querySelectorAll(".js-next-level-modal");
	const btnOtherGames = document.querySelector(".js-to-other-games");
	const btnShowField = document.querySelectorAll(".js-show-field");
	const wordModal = document.querySelector(".modal-word");
	const descModal = document.querySelector(".modal-desc");
	initBtns();
	// initTitleAnimate();

	function resetGame() {
		copyWordColors = [...wordColors];
		area.innerHTML = '';
		schemeInGame = '';
		wordsInGame = [];
		lastSelectedWord = [];
		selectingWord = [];
		selectingPrevLetter = [];

		modalDesc.close();
	}

	// удаление элемента массива по названию
	function _removeItemFromArrayByValue(array, item) {
		var index = array.indexOf(item);
		if (index !== -1) {
			array.splice(index, 1);
		}
	}

	function addXP(val) {
		xp = xp + val;
		bar.animate(xp/1000);  // Number from 0.0 to 1.0
	}

	function initBtns() {
		btnSettings.addEventListener('click', () => {
			$("#settings-screen").show()
			$("#start-screen").hide()
			$("#game-screen").hide()
			$("#about-screen").hide()
			$("#other-games-screen").hide()
		});

		[...btnNextLevel].concat([...btnNextLevelModal]).forEach(btn => {
			btn.addEventListener('click', () => {
				resetGame();
				createGrid(gridSize, gridSize);
				schemeInGame = getScheme(gridSize + 'x' + gridSize);
				fillGrid(schemeInGame);
				initEvents();

				btnNextLevel.forEach(btn => btn.classList.add('_hidden'))
			})
		})
		btnOtherGames.addEventListener('click', () => {
			$("#other-games-screen").show()
			$("#start-screen").hide()
			$("#game-screen").hide()
			$("#settings-screen").hide()
			$("#about-screen").hide()
		})

		btnShowField.forEach(btn => {
			btn.addEventListener('click', () => {
				btnNextLevel.forEach(btn => btn.classList.remove('_hidden'))
				modalWin.close();
			})
		})
		btnAbout.addEventListener('click', () => {
			$("#about-screen").show()
			$("#start-screen").hide()
			$("#game-screen").hide()
			$("#settings-screen").hide()
			$("#other-games-screen").hide()
		})
		btnPlay.forEach(btn => {
			btn.addEventListener('click', () => {
				$("#settings-screen").hide()
				$("#about-screen").hide()
				$("#game-screen").show()
				$("#other-games-screen").hide()

				gridSize = btn.getAttribute('data-grid');

				resetGame();
				createGrid(gridSize, gridSize);
				schemeInGame = getScheme(gridSize + 'x' + gridSize);
				fillGrid(schemeInGame);
				initEvents();
				// initXPBar();
			})
		})
		btnBack.forEach(btn => {
			btn.addEventListener('click', () => {
				$("#start-screen").show()
				$("#game-screen").hide()
				$("#about-screen").hide()
				$("#settings-screen").hide()
				$("#other-games-screen").hide()
			})
		})
	}

	function _getRandomBoolean() {
		return Math.random() < 0.5;
	}

	// получение случайного элемента из массива
	function _getRandomFromArray(items) {
		return items[Math.floor(Math.random()*items.length)];
	}
	// перемешивание элементов массива
	function _shuffle(arr) {
		var j, x, index;
		for (index = arr.length - 1; index > 0; index--) {
			j = Math.floor(Math.random() * (index + 1));
			x = arr[index];
			arr[index] = arr[j];
			arr[j] = x;
		}
		return arr;
	}

	function getCellClass(rows) {
		let className;
		switch(+rows) {
			case 3: className = 'cell-lg'; break;
			case 4: className = 'cell-md'; break;
			case 6: className = 'cell-sm'; break;
			case 8: className = 'cell-xs'; break;
		}
		return className;
	}

	function createGrid(rows, cols) {
		if (rows !== cols) return;

		for (let i = 0; i < rows; i++) {
			let row = document.createElement('div');
			row.classList.add('row');

			for (let j = 0; j < cols; j++) {
				let cell = document.createElement('div');
				cell.classList.add('cell');
				cell.classList.add(getCellClass(rows));
				cell.setAttribute('data-coords', (i + 1) + '-' + (j + 1));

				row.appendChild(cell);
			}

			area.appendChild(row);
		}
	}

	function getScheme(format) {
		return _getRandomFromArray(SCHEME[format]);
	}

	function getWordByLength(length) {
		return _shuffle(WORDS.filter(word => !wordsInGame.some(wordInGame => wordInGame.name === word.name))).find(word => word.name.length === length);
	}

	function fillGrid(scheme) {
		console.log(scheme);
		scheme.forEach(coords => {
			let countLetters = coords.length;
			wordsInGame.push(getWordByLength(countLetters));
		});

		scheme.forEach((coords, i) => {
			coords = _getRandomBoolean() ? coords.reverse() : coords;
			let word = wordsInGame[i];

			if (word) {
				[...word.name].forEach((letter, j) => {
					let cell = document.querySelector('.cell[data-coords="' + coords[j] + '"]');
					cell.innerHTML = letter;
				})
			} else {
				console.error('Не найдено подходящих слов')
			}
		})
	}

	function equalsCheck(a, b) {
		if (a.length != b.length) {
			return false;
		} else {
			let result = false;

			for (let i = 0; i < a.length; i++) {

				if (a[i] !== b[i]) {
					return false;
				} else {
					result = true;
				}
			}
			return result;
		}
	}

	function checkWin() {
		let cells = document.querySelectorAll('.cell');
		if (![...cells].filter(cell => !cell.classList.contains('correct')).length) {
			btnNextLevelModal.forEach(btn => btn.classList.remove('_hidden'));
			btnNextLevel.forEach(btn => btn.classList.add('_hidden'));
			modalWin.showModal();
			// addXP(10);

			return;
		}
	}

	function getWordByCoords(coords) {
		let res = [];
		coords.forEach(coord => {
			let cell = document.querySelector('.cell[data-coords="' + coord + '"]');
			res.push(cell.innerHTML);
		})

		return res.join('');
	}

	function checkWord() {
		let word = getWordByCoords(selectingWord);

		if (selectingWord.length && (getWordByCoords(lastSelectedWord) === word)) {
			modalUnknownWord.showModal();
			return;
		}
		lastSelectedWord = selectingWord;

		// если слово собрано верно
		if ( schemeInGame.some(scheme => equalsCheck(scheme, selectingWord)) ) {

			// выбор цвета для слова
			let colorWord = _getRandomFromArray(copyWordColors);
			_removeItemFromArrayByValue(copyWordColors, colorWord);

			selectingWord.forEach((coords, i) => {
				let cell = document.querySelector('.cell[data-coords="' + coords + '"]');
				cell.classList.add('correct');
				cell.classList.remove('selected');
				cell.style.backgroundColor = '#' + colorWord;
				cell.setAttribute('data-word', word);

				$(cell).velocity({scale: 1.1}, 200);
				$(cell).velocity("reverse", { duration: 200 });

				cell.addEventListener('click', () => {
					let findWord = cell.getAttribute('data-word');

					wordModal.innerHTML = capitalizeFirstLetter(findWord);
					descModal.innerHTML = WORDS.find(word => word.name === findWord).desc;

					modalDesc.showModal();
				})

				if (i === 0) {
					cell.classList.add('correct-first');
				}
			})

			if (selectingWord.length > 1) {
				inputedWord.classList.add('inputed-word-correct');
				setTimeout(() => {
					clearInputedWord();
				}, 2000)
			}

			// addXP(5);

			setTimeout(() => {
				checkWin()
			}, 1000);
		} else if (wordsInGame.map(word => word.name).includes(getWordByCoords(selectingWord))) {
			lastSelectedWord = [];
			modalOtherPath.showModal();
		} else {
			if (selectingWord.length > 1) {
				inputedWord.classList.add('inputed-word-incorrect');
				setTimeout(() => {
					clearInputedWord();
				}, 2000)
			}
		}

		selectingWord = [];
		lastSelectedWord = [];
	}

	function clearInputedWord() {
		inputedWord.innerHTML = "";
		inputedWord.classList.remove('inputed-word-active');
		inputedWord.classList.remove('inputed-word-correct');
		inputedWord.classList.remove('inputed-word-incorrect');
	}

	function capitalizeFirstLetter(str) {
		return str.charAt(0).toUpperCase() + str.slice(1);
	}

	function onlyUnique(value, index, array) {
		return array.indexOf(value) === index;
	  }

	function getAvailableCells(coords) {
		let res = [];

		let [row, col] = coords.split('-');
		row = parseInt(row);
		col = parseInt(col);

		if (col === gridSize) {
			res.push(row + '-' + (col-1));
		}
		if (col === 1) {
			res.push(row + '-' + (col+1));
		}
		if (col !== 1 && col !== gridSize) {
			res.push(row + '-' + (col-1));
			res.push(row + '-' + (col+1));
		}

		if (row === gridSize) {
			res.push((row-1) + '-' + col);
		}
		if (row === 1) {
			res.push((row+1) + '-' + col);
		}
		if (row !== 1 && row !== gridSize) {
			res.push((row-1) + '-' + col);
			res.push((row+1) + '-' + col);
		}

		return res.filter(onlyUnique).filter(coords => {
			let cell = document.querySelector('.cell[data-coords="' + coords + '"]');
			if (cell) {
				return !cell.classList.contains('correct');
			}
		});
	}

	function removeAvailableCells() {
		let availabledCells = document.querySelectorAll('.cell.available');
		availabledCells.forEach(cell => cell.classList.remove('available'));
	}

	function eventCoords(e, minus) {
		var coords = {
			top: 0,
			left: 0,
			width: 0,
			height: 0
		};
		var x = e.touches && e.touches.length ? e.touches[0].clientX : e.pageX;
		var y = e.touches && e.touches.length ? e.touches[0].clientY : e.pageY;
		coords.left = x;
		coords.top = y;
		if (minus) {
			coords.top -= minus.top;
			coords.left -= minus.left;
		}
		return coords;
	}

	function initEvents() {
		let mouseIsDown = false;
		let isMoving = false;

		$('#area .cell').on('mousedown touchstart', function(e) {
			if ($(this).hasClass('selected') || $(this).hasClass('correct')) {
				return;
			}
			clearInputedWord();
			$(this).addClass('selected');

			mouseIsDown = true;
			selectingWord = [];
			selectingWord.push($(this).attr('data-coords'));

			let availableCells = getAvailableCells($(this).attr('data-coords'));
			availableCells.map(coords => {
				let cell = document.querySelector('.cell[data-coords="' + coords + '"]');
				$(cell).addClass('available')
			});

			e.preventDefault();
			return false;
		});

		$('#area').on('mousemove touchmove', function(e) {
			if (!selectingWord.length) {
				return;
			}
			var event_type = e.type;

			if (event_type == 'mousemove' || event_type == 'touchmove') {
				var touch_coords = eventCoords(e);
				$('.cell.available').each(function() {
					var offset = $(this).offset();
					// !$(this).hasClass('selected') &&
					if (((touch_coords.left >= offset.left && touch_coords.left <= (offset.left + $(this)[0].getBoundingClientRect().width)) && (touch_coords.top >= offset.top && touch_coords.top <= (offset.top + $(this)[0].getBoundingClientRect().height)))) {

						if ((mouseIsDown && !isMoving) || (mouseIsDown && isMoving && $(this).hasClass('available')) || (mouseIsDown && isMoving && ($(this).attr('data-coords') === selectingPrevLetter))) {

							if ($(this).attr('data-coords') !== selectingPrevLetter) {
								removeAvailableCells();
							}

							if ($(this).hasClass('correct')) {
								let lastCell = document.querySelector('.cell[data-coords="' + selectingWord[selectingWord.length - 1] + '"]');
								if (!lastCell) return false;
								lastCell.classList.add('available');
								return false;
							}
							$(this).addClass('selected');
							isMoving = true;

							let availableCells = getAvailableCells($(this).attr('data-coords'));
							availableCells.map(coords => {
								let cell = document.querySelector('.cell[data-coords="' + coords + '"]');
								$(cell).addClass('available')
							});

							if (!selectingWord.includes($(this).attr('data-coords'))) {
								selectingPrevLetter = selectingWord[selectingWord.length - 1];
								selectingWord.push($(this).attr('data-coords'));
							}

							if (selectingPrevLetter === $(this).attr('data-coords')) {
								let lastCell = document.querySelector('.cell[data-coords="' + selectingWord[selectingWord.length - 1] + '"]');
								lastCell.classList.remove('selected');
								selectingWord.pop();
								selectingPrevLetter = selectingWord[selectingWord.length - 1];
							}

							if (selectingWord.length > 1) {
								inputedWord.classList.add('inputed-word-active');
								inputedWord.innerHTML = getWordByCoords(selectingWord);
							} else {
								clearInputedWord();
							}
						}

					}
				});
			}
		});
		$('#area .cell').on('mouseup touchend', function(e) {
			mouseIsDown = false;
			isMoving = false;

			selectingWord.forEach(coords => {
				let cell = document.querySelector('.cell[data-coords="' + coords + '"]');
				cell.classList.remove('selected');
			})
			removeAvailableCells();

			checkWord();
		});
	}















	function initTitleAnimate() {
		mainTitle.innerHTML = mainTitle.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: false})
		.add({
			targets: '.main-title .letter',
			scale: [4,1],
			opacity: [0,1],
			translateZ: 0,
			easing: "easeOutExpo",
			duration: 950,
			delay: (el, i) => 70*i
		})
	}

	function initXPBar() {
		document.querySelector("#ui-xp-circle").innerHTML = '';
		bar = new ProgressBar.Circle(document.querySelector("#ui-xp-circle"), {
			color: '#000',
			strokeWidth: 8,
			trailWidth: 4,
			easing: 'easeInOut',
			duration: 1400,
			text: {
			autoStyleContainer: false
			},
			from: { color: '#71BC78', width: 8 },
			to: { color: '#71BC78', width: 8 },
			step: function(state, circle) {
				circle.path.setAttribute('stroke', state.color);
				circle.path.setAttribute('stroke-width', state.width);

				var value = Math.round(circle.value() * 1000);
				circle.setText(value);
			}
		});
		addXP(0);
	}
})
