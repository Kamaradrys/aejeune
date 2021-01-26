<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Sexes</th>
                                                <th>Dates</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sexes as $sexe)
                                            <tr>
                                                <td>{{ $sexe->id }}</td>
                                                <td>{{ $sexe->name }}</td>
                                                <td>{{ date_format($sexe->created_at, 'd/m/Y').' à '.date_format($sexe->created_at, 'H:i') }}</td>
                                                <td>
                                                <a href="{{ route('sexe.delete',$sexe->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('sexe.edit',$sexe->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 