<div id="game-screen" class="screen">
	<div class="container">
		<div class="button button-back js-back"></div>
		<!-- <div class="ui-xp">
			<div id="ui-xp-circle"></div>
			<div class="ui-xp-level">Уровень 1</div>
		</div> -->

		<div class="hint js-hint-modal _hidden"></div>

		<div class="score">0</div>

		<div id="modal-unkown-word" class="modal">
			<div>Не знаю такого слова</div>
			<button class="modal-close">Понятно</button>
		</div>

		<div id="modal-other-path" class="modal">
			<div>Соберите слово по-другому</div>
			<button class="modal-close">Понятно</button>
		</div>

		<div id="modal-found-bonus" class="modal">
			<div>Бонусное слово уже найдено</div>
			<button class="modal-close">Понятно</button>
		</div>

		<div id="modal-word-desc" class="modal">
			<div class="modal-word">Слово</div>
			<div class="modal-desc">Описание</div>
			<button class="modal-close">Понятно</button>
		</div>

		<div id="modal-win" class="modal">
			<div>Победа!</div>
			<button class="js-next-level-modal">Новый уровень</button>
			<button class="js-show-field">Посмотреть поле</button>
		</div>

		<div id="modal-hint" class="modal">
			<div>Получить подсказку после просмотра короткой рекламы?</div>
			<button class="js-get-hint">Да</button>
			<button class="js-show-field">Нет</button>
		</div>

		<!-- <dialog id="modal-unkown-word">
			<div>Не знаю такого слова</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog> -->

		<!-- <dialog id="modal-other-path">
			<div>Соберите слово по-другому</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog> -->

		<!-- <dialog id="modal-found-bonus">
			<div>Бонусное слово уже найдено</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog> -->

		<!-- <dialog id="modal-word-desc">
			<div class="modal-word">Слово</div>
			<div class="modal-desc">Описание</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-win">
			<div>Победа!</div>
			<form method="dialog">
				<button class="js-next-level-modal">Новый уровень</button>
				<button class="js-show-field">Посмотреть поле</button>
			</form>
		</dialog>

		<dialog id="modal-hint">
			<div>Получить подсказку после просмотра короткой рекламы?</div>
			<form method="dialog">
				<button class="js-get-hint">Да</button>
				<button class="js-show-field">Нет</button>
			</form>
		</dialog> -->

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
			<div id="area" class="area"></div>
			<div class="button button-next-level js-next-level _mt-16 _hidden">Новый&nbsp;уровень</div>
			<div class="inputed-word"></div>
		</div>
	</div>
</div>
