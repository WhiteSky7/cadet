<?php

namespace App\Models;

use App\Http\Requests\StoreStatementRequest;
use App\Http\Requests\UpdateStatementRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class Statement extends Model
{
    protected $table = 'statement';

    protected $fillable = ['user_id','name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function store(Request $request): bool
    {
        $statement = self::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
        ]);

        return true;
    }
     public function showStatement(Statement $statement)
     {

        return self::findOrFail($statement->id);

    }

     public function updateStatement(Request $request, Statement $statement): string
     {

         $_statement = self::findOrFail($statement->id);

         $_statement->user_id = $request->user_id;
         $_statement->name = $request->name;

         $_statement->save();

         return $_statement;

     }

      public function deleteStatement(Statement $statement): bool
     {

        $statement->delete();

        return true;
     }
}
