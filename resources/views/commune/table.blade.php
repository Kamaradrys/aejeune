<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Office</th>
                                                <th>Nombre agent</th>
                                                <th>Date création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Office</th>
                                                <th>Nombre agent</th>
                                                <th>Date création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($communes as $commune)
                                            <tr>
                                                <td>{{ $commune->id }}</td>
                                                <td>{{ $commune->name }}</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>{{ $commune->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('commune.delete',$commune->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                    <a href="{{ route('commune.edit',$commune->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                    <a href="" class="bg-blue-700  px-2 rounded text-white py-2"> <i class="fa fa-eye"></i></a>
                                                    
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 