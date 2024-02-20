<div id="game-screen">
	<div class="container">
		<div class="button button-back js-back">⬅️ Назад</div>
		<!-- <div class="ui-xp">
			<div id="ui-xp-circle"></div>
			<div class="ui-xp-level">Уровень 1</div>
		</div> -->

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


		<dialog id="modal-word-desc">
			<div class="modal-word">Слово</div>
			<div class="modal-desc">Описание</div>
			<form method="dialog">
				<button>Понятно</button>
			</form>
		</dialog>

		<dialog id="modal-win">Победа!
			<form method="dialog">
				<button class="js-next-level">Следующий уровень</button>
				<button>Посмотреть поле</button>
			</form>
		</dialog>

		<div class="area-wrapper">
			<div id="area"></div>
			<div class="button js-next-level _mt-16 _hidden">Следующий&nbsp;уровень</div>
		</div>
	</div>
</div>
