<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="edit-plant" tabindex="-1" aria-labelledby="newPlantModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
            Modify Plant
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="u_plant" method="POST" class="modal-body relative p-4">
            @csrf
            @method('PUT') <input type="hidden" class="form-control" name="id" id="u_id" >
            <div class="form-group mb-6">
              <input type="text" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="nom" id="u_nom"
                placeholder="Nom">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-8">
                {{-- <input type="text" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="type_semence" id="u_type_semence"
                  aria-label="Type Semence" placeholder="Type Semence"> --}}
                  
                  <select class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    required
                    name="type_semence" id="u_type_semence"
                    aria-label="Type Semence">
                      <option value="">Selectionner</option>
                      <option value="Vivre Frais">Vivre Frais</option>
                      <option value="Tubercules">Tubercules</option>
                      <option value="Céréales">Céréales</option>
                  </select>
              </div>
              <div class="form-group mb-4">
                <input type="number" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="periodicite" id="u_periodicite"
                  aria-label="Periodicité" placeholder="Periodicité">
              </div>
            </div>

        </form>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button"
            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
           Cancel
          </button>
          <button onclick="updatePlant()"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Save
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function editPlant(plant) {
      console.log(plant); 
      $.each( plant, function( key, value ) {
        console.log("#u_%s : %s", key, value); 
        $("#u_"+key).val(value).change();
      });
      $('#edit-plant').modal('show');
    }
  
    function updatePlant() {
      var form = $('#u_plant');
  
      var id = $('#u_id').val();
      let _url     = `/plant/${id}`;
      form.attr('action', _url);
      form.submit();
    }
  </script>