<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function index()
    {
        $users = User::all(); // Получаем всех пользователей

        return view('users.index', compact('users'));
    }
    public function destroy($id)
    {
        $userToDelete = User::findOrFail($id);
        $currentUser = Auth::user();

        // Проверяем, не пытается ли пользователь удалить самого себя
        if ($currentUser->id === $userToDelete->id) {
            return redirect()->route('users.index')->with('error', 'Вы не можете удалить самого себя.');;
        }

        $user = User::findOrFail($id);
        $user->delete(); // Удаляем пользователя из базы данных

        return redirect()->route('users.index')
            ->with('success', 'Пользователь успешно удален.');
    }
}
