<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Fragrance;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $fragrances = Fragrance::all();
        return view("admin.index", ["fragrances" => $fragrances]);
    }

    public function create_product()
    {
        return view("admin.create_product");
    }

    public function store_product(Request $request)
    {

        $request->validate([
            // 'fragrance_description' => 'required',
            // 'fragrance_name' => 'required',
            // 'Ingredients' => 'required',
            // 'gender' => 'required',
            // 'quantity' => 'required|integer',
            // 'price' => 'required|numeric',
            'image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $this->handleImageUpload($request->file('image1'));
        $imagePath2 = $this->handleImageUpload($request->file('image2'));
        $imagePath3 = $this->handleImageUpload($request->file('image3'));
        $imagePath4 = $this->handleImageUpload($request->file('image4'));

        Fragrance::create([
            'fragrance_name' => $request->fragrance_name,
            'fragrance_description' => $request->fragrance_description,
            'ingredients' => $request->ingredients,
            'gender' => $request->gender,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $imagePath,
            'image2' => $imagePath2,
            'image3' => $imagePath3,
            'image4' => $imagePath4,
        ]);
        return redirect()->route('admin.index')->with('success', 'Product created successfully');

    }

    private function handleImageUpload($file)
    {
        if ($file && $file->isValid()) {
            return $file->store('images', 'public');
        }

        return null;
    }

    private function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }

    public function update_view_product($id)
    {
        $fragrance = Fragrance::findOrFail($id);
        return view('admin.update_product', ['fragrance' => $fragrance]);
    }

    public function update_product(Request $request, $id)
    {
        $request->validate([
            // Validation rules for fragrance attributes if needed
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the fragrance record by ID
        $fragrance = Fragrance::findOrFail($id);

        // Handle image uploads and update paths if new images are provided
        if ($request->hasFile('image1')) {
            $fragrance->image = $this->handleImageUpload($request->file('image1'));
        }
        if ($request->hasFile('image2')) {
            $fragrance->image2 = $this->handleImageUpload($request->file('image2'));
        }
        if ($request->hasFile('image3')) {
            $fragrance->image3 = $this->handleImageUpload($request->file('image3'));
        }
        if ($request->hasFile('image4')) {
            $fragrance->image4 = $this->handleImageUpload($request->file('image4'));
        }

        // Update fragrance attributes if needed
        $fragrance->update([
            'fragrance_name' => $request->fragrance_name,
            'fragrance_description' => $request->fragrance_description,
            'ingredients' => $request->ingredients,
            'gender' => $request->gender,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        
        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }
    public function destroy_product($id)
    {
        $fragrance = Fragrance::findOrFail($id);

        $this->deleteImage($fragrance->image);
        $this->deleteImage($fragrance->image2);
        $this->deleteImage($fragrance->image3);
        $this->deleteImage($fragrance->image4);

        $fragrance->delete();

        return redirect()->route('admin.index')->with('success', 'Product created successfully');

    }

    // Controller method
    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Fragrance::where('fragrance_name', 'like', "%$query%")
            ->get();

        return view("admin.index", ["fragrances" => $posts]);
    }


}
