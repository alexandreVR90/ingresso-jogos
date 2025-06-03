use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\LotController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔐 Painel Admin - Jogos e Lotes
    Route::prefix('admin')->name('admin.')->group(function () {

        // CRUD de Jogos
        Route::resource('games', GameController::class);

        // CRUD de Lotes dentro de Jogos
        Route::resource('games.lots', LotController::class)->shallow();
    });
});

require __DIR__.'/auth.php';
