use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;

// 👉 Tela inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// 👉 Detalhe do jogo
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
