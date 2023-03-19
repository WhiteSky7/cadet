<?php

namespace App\Models;

use App\Http\Requests\StoreStatementRequest;
use App\Http\Requests\UpdateStatementRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

/**
 * Summary of Statement
 */
class Statement extends Model
{
    use HasFactory;
    protected $table = 'statement';

    protected $fillable = ['user_id','name'];

    /**
     * Summary of user
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Summary of store
     * @param Request $request
     * @return bool
     */
    public function store(Request $request): bool
    {
        $statement = self::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
        ]);

        return true;
    }
     /**
      * Summary of showStatement
      * @param Statement $statement
      * @return mixed
      */
     public function showStatement(Statement $statement)
     {

        return self::findOrFail($statement->id);

    }

     /**
      * Summary of updateStatement
      * @param Request $request
      * @param Statement $statement
      * @return string
      */
     public function updateStatement(Request $request, Statement $statement): string
     {

         $_statement = self::findOrFail($statement->id);

         $_statement->user_id = $request->user_id;
         $_statement->name = $request->name;

         $_statement->save();

         return $_statement;

     }

      /**
       * Summary of deleteStatement
       * @param Statement $statement
       * @return bool
       */
      public function deleteStatement(Statement $statement): bool
     {

        $statement->delete();

        return true;
     }
}
