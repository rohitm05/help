<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('index');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('categories')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('categories')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
      	@foreach($categories as $cat)
				$output = '			<tr>
								<td>'.{{$cat->title}}.'</td>
								<td>'.{{$cat->description}}.'</td>
								<td>
									<button class="btn btn-info" data-mytitle="{{$cat->title}}" data-mydescription="'.{{$cat->description}}.'" data-catid='.{{$cat->id}}.' data-toggle="modal" data-target="#edit">Edit</button>
									/
									<button class="btn btn-danger" data-catid='.{{$cat->id}}.' data-toggle="modal" data-target="#delete">Delete</button>
								</td>
							</tr>
';
						@endforeach
       
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}