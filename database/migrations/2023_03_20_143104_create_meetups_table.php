<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('meetups', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('title');
            $table->longText('description');
            $table->longText('rules');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }
};
