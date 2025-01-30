<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyMemberController;

// API Routes for Family Members

Route::prefix('family-members')->group(function () {
    // Get all family members
    Route::get('/', [FamilyMemberController::class, 'index']);

    // Add a new family member
    Route::post('/', [FamilyMemberController::class, 'store']);

    // Get a single family member by ID
    Route::get('/{id}', [FamilyMemberController::class, 'show']);

    // Update a family member by ID
    Route::put('/{id}', [FamilyMemberController::class, 'update']);

    // Delete a family member by ID
    Route::delete('/{id}', [FamilyMemberController::class, 'destroy']);
});
