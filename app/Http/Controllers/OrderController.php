<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
        
        
        $academicId = $request->get('academic_level');
        $documentId = $request->get('paper_type');
        $subjectId = $request->get('subject_id');
        $topic = $request->get('topic');
        $instructions = $request->get('instructions');
        $englishType = $request->get('english_type');
        $styleId = $request->get('style_id');
        $discountAmount = $request->get('discount_amount');
        $discountId = $request->get('discount_id');
        $file = $request->file('file');
        $urgencyId = $request->get('urgency_id');
        $pages = $request->get('pages');
        $spacing = $request->get('spacing');
        $sources = $request->get('sources');
        $charts = $request->get('charts');
        $slides = $request->get('slides');
        $writerCategoryId = $request->get('writer_category_id');
        $featureIds = $request->get('feature_ids', []);



        $data = [
            'academic_id' => $academicId,
            'document_id' => $documentId,
            'subject_id' => $subjectId,
            'topic' => $topic,
            'instructions' => $instructions,
            'english_type' => $englishType,
            'style_id' => $styleId,
            'discount_amount' => $discountAmount,
            'discount_id' => $discountId,
            'urgency_id' => $urgencyId,
            'pages' => $pages,
            'spacing' => $spacing,
            'sources' => $sources,
            'charts' => $charts,
            'slides' => $slides,
            'writer_category_id' => $writerCategoryId,
            'feature_ids' => $featureIds,
        ];
    
        // Return the data as JSON response
        return response()->json( $data );




    }
}
