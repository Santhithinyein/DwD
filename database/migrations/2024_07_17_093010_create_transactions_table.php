<?php

use App\Models\DonationType;
use App\Models\Monastery;
use App\Models\TransactionType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->double('receiveNo');
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Monastery::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(DonationType::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(TransactionType::class)->nullable()->constrained()->nullOnDelete();
            $table->string('receivePhoto');
            $table->double('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
