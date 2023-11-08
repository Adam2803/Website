public function showShoeGallery()
{
    $shoeImages = [
        '/images/shoe1.jpg',
        '/images/shoe2.jpg',
        '/images/shoe3.jpg',
        // Add more shoe image URLs here
    ];
    
    $selectedShoe = '/images/shoe1.jpg'; // Set an initial selected shoe image
    
    return view('shoe-gallery', compact('shoeImages', 'selectedShoe'));
}
