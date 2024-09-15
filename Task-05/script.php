<!-- Task 5: To-Do Module -->

// Todo model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {
    protected $fillable = ['title', 'description', 'completed'];
}

// TodoController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller {
    public function index() {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->completed = false;
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function edit($id) {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->completed = $request->input('completed');
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function destroy($id) {
        Todo::find($id)->delete();
        return redirect()->route('todos.index');
    }
}