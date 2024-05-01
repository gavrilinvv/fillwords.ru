<div id="game-screen" class="screen">
	<div class="container">
		<div class="button button-back js-back"></div>
		<!-- <div class="ui-xp">
			<div id="ui-xp-circle"></div>
			<div class="ui-xp-level">Уровень 1</div>
		</div> -->

		<div class="score">0</div>

		<dialog id="modal-unkown-word">Я не знаю такого слова
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-other-path">Соберите слово по-другому
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-found-bonus">Бонусное слово уже найдено
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-word-desc">
			<div class="modal-word">Слово</div>
			<div class="modal-desc">Описание</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-win">Победа!
			<form method="dialog">
				<button class="js-next-level-modal">Новый уровень</button>
				<button class="js-show-field">Посмотреть поле</button>
			</form>
		</dialog>

		<!-- <div class="area-table">
			<div class="area-table__title">Слова</div>
			<div class="area-table__content">
				<div class="area-table__base-list">
					<div class="area-table__title">Загаданные</div>
				</div>
				<div class="area-table__bonus-list">
					<div class="area-table__title">Бонусные</div>
				</div>
			</div>
		</div> -->

		<div class="area-wrapper">
			<div class="notice"></div>
			<div id="area"></div>
			<div class="button button-next-level js-next-level _mt-16 _hidden">Новый&nbsp;уровень</div>
			<div class="inputed-word"></div>
		</div>
	</div>
</div>
