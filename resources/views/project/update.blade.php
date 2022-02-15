<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="edit-projcet" tabindex="-1" aria-labelledby="newPlantModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
            Modify Project
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="u_projcet" method="POST" class="modal-body relative p-4">
            @csrf
            @method('PUT') <input type="hidden" class="form-control" name="id" id="u_id" >
            <div class="form-group mb-6">
              <input type="text" class="form-control block
                
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="localisation_champ" id="u_localisation_champ"
                placeholder="Localisation Champ">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="pays" id="u_pays"
                  aria-label="Pays" placeholder="Pays">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control
                 
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="region" id="u_region"
                  aria-label="Région" placeholder="Région">
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <label for="superficie" class="form-label inline-block mb-2 text-gray-700">Superficie </label>
                <input type="number" class="form-control
                 
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="superficie" id=" "
                  aria-label=" " placeholder=" ">
              </div>
              <div class="form-group mb-8">
                <label for="plant_id" class="form-label inline-block mb-2 text-gray-700">Plant</label>
                <select class="form-select appearance-none
                    
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    required
                    name="plant_id" id="u_plant_id"
                    aria-label="Plant">
                      <option value="" class="text-gray-700">Selectionner</option>
                      @foreach ($plant as $p)
                        <option value={{ $p->id }}>{{ $p->nom }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <label for="date_prise_contact" class="form-label inline-block mb-2 text-gray-700"> Date Prise De Contact</label>
                <input type="date" class="form-control
                 
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="date_prise_contact" id="u_date_prise_contact"
                  aria-label="Prise De Contact" placeholder="Prise De Contact">
              </div>
              <div class="form-group mb-8">
                <label for="farmer_id" class="form-label inline-block mb-2 text-gray-700">farmer</label>
                <select class="form-select appearance-none
                   
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    required
                    name="farmer_id" id="u_farmer_id"
                    aria-label="farmer">
                      <option value="" class="text-gray-700">Select</option>
                      @foreach ($farmer as $a)
                        <option value={{ $a->id }}>{{ $a->nom }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <label for="date_semis" class="form-label inline-block mb-2 text-gray-700">Date Semis</label>
                <input type="date" class="form-control
                  
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="date_semis" id="u_date_semis"
                  aria-label="Date Semis" placeholder="Date Semis">
              </div>
              <div class="form-group mb-8">
                <label for="date_anticipe_recolte" class="form-label inline-block mb-2 text-gray-700">Date Anticipée Recolte</label>
                <input type="date" class="form-control
                 
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="date_anticipe_recolte" id="u_date_anticipe_recolte"
                  aria-label="Date Anticipée Recolte" placeholder="Date Anticipée Recolte">
              </div>
            </div>
        </form>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button"
            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-pink-700 hover:shadow-lg focus:bg-pink-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-pink-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            Cancel
          </button>
          <button 
            onclick="updateProject()"
            class="inline-block px-6 py-2.5 bg-brow-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-brown-700 hover:shadow-lg focus:bg-brown-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-brown-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Save
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function editProject(project) {
      console.log(project); 
      $.each( project, function( key, value ) {
        console.log("#u_%s : %s", key, value); 
        $("#u_"+key).val(value).change();
      });
      $('#edit-project').modal('show');
    }
  
    function updateProject() {
      var form = $('#u_project');
  
      var id = $('#u_id').val();
      let _url     = `/projects/${id}`;
      form.attr('action', _url);
      form.submit();
    }
  </script>