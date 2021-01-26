<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Objet</th>
                                                <th>Dates</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($objets as $objet)
                                            <tr>
                                                <td>{{ $objet->id }}</td>
                                                <td>{{ $objet->name }}</td>
                                                <td>{{ date_format($objet->created_at, 'd/m/Y').' à '.date_format($objet->created_at, 'H:i') }}</td>
                                                <td>
                                                <a href="{{ route('objet.delete',$objet->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('objet.edit',$objet->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 