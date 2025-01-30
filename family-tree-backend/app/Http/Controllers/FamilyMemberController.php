<?php


namespace App\Http\Controllers;

use App\Models\FamilyMember;
use Illuminate\Http\Request;

class FamilyMemberController extends Controller
{
    // Fetch all family members
    public function index()
    {
        $familyMembers = FamilyMember::all();
        return response()->json($familyMembers);
    }

    // Add a new family member
    public function store(Request $request)
    {
        // Decode the raw JSON body
        $rawData = json_decode($request->getContent(), true);


        // Validate the decoded data
        $validatedData = validator($rawData, [
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'birthdate' => 'required|date',
            'image' => 'required|url',
            'parent_id' => 'nullable|exists:family_members,id',
        ])->validate();



        // Create the family member
        $familyMember = FamilyMember::create($validatedData);

        return response()->json([
            'success' => true,
            'data' => $familyMember,
        ], 201);
    }



    // Get a single family member by ID
    public function show($id)
    {
        $familyMember = FamilyMember::findOrFail($id);
        return response()->json($familyMember);
    }

    // Update a family member's details
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'age' => 'sometimes|required|integer',
            'birthdate' => 'sometimes|required|date',
            'image' => 'sometimes|required|url',
            'parent_id' => 'nullable|exists:family_members,id',
        ]);

        $familyMember = FamilyMember::findOrFail($id);
        $familyMember->update($request->all());
        return response()->json($familyMember);
    }

    // Delete a family member
    public function destroy($id)
    {
        FamilyMember::destroy($id);
        return response()->json(null, 204);
    }
}
