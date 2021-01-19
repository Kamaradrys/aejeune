<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Noms</th>
                                                <th>Prenoms</th>
                                                <th>Sexes</th>
                                                <th>Structures</th>
                                                <th>Contacts</th>
                                                <th>Emails</th>
                                                <th>Objets</th>
                                                {{-- <th>Agents enregistreur</th> --}}
                                                <th>Dates</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($visiteurs as $visiteur)
                                            <tr>
                                                <td>{{ $visiteur->id }}</td>
                                                <td>{{ $visiteur->nom }}</td>
                                                <td>{{ $visiteur->prenoms }}</td>
                                                <td>{{ $visiteur->sexe->name }}</td>
                                                <td>{{ $visiteur->structure }}</td>
                                                <td>{{ $visiteur->contacts }}</td>
                                                <td>{{ $visiteur->mail }}</td>
                                                <td>{{ $visiteur->objet->name }}</td>
                                                {{-- <td>{{ $visiteur->users->name }}</td>
 --}}                                                <td>{{ date_format($visiteur->created_at, 'd/m/Y').' à '.date_format($visiteur->created_at, 'H:i') }}</td>
                                                <td>
                                                <a href="{{ route('visiteur.delete',$visiteur->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('visiteur.edit',$visiteur->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 