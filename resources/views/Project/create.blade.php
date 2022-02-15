<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="newPlantModal" tabindex="-1" aria-labelledby="newPlantModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <form method="POST" action="{{ route('Project.store') }}" class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
            New Project
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
            @csrf
            <div class="form-group mb-6">
              <input type="text" class="form-control block
                focus:text-gray-700 focus:bg-white  focus:outline-none" name="localisation_champ" id="localisation_champ"
                placeholder="localisation ">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  focus:text-gray-700 focus:bg-white  focus:outline-none" name="pays" id="pays"
                  aria-label="Pays" placeholder="Pays">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  focus:text-gray-700 focus:bg-white  focus:outline-none" name="region" id="region"
                  aria-label="Région" placeholder="Région">
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <label for="superficie"  "mb-2 text-gray-700">Superficie (m²)</label>
                <input type="number" class="form-control
                  focus:text-gray-700 focus:bg-white  focus:outline-none" name="superficie" id="superficie"
                  aria-label="Superficie (m²)" placeholder=" ">
              </div>
              <div>
                <label for="plant_id"  "mb-2 text-gray-700">Plant</label>
                <select class="form-select appearance-none
                    focus:text-gray-700 focus:bg-white  focus:outline-none"
                    required
                    name="plant_id" id="plant_id"
                    aria-label="Plant">
                      <option value="" class="text-gray-700">Selectionner</option>
                      @foreach ($plant as $p)
                        <option value={{ $p->id }}>{{ $p->name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div>
              <div>
                <label for="date_prise_contact"  "mb-2 text-gray-700">Prise De Contact</label>
                <input type="date" class="form-control
                  focus:text-gray-700 focus:bg-white  focus:outline-none" name="date_prise_contact" id="date_prise_contact"
                  aria-label="Prise De Contact" placeholder="Prise De Contact">
              </div>
              <div>
                <label for="farmer_id"  "mb-2 text-gray-700">Farmer</label>
                <select class="form-select appearance-none
                    focus:text-gray-700 focus:bg-white  focus:outline-none"
                    required
                    name="farmer_id" id="farmer_id"
                    aria-label="farmer">
                      <option value="" class="text-gray-700">Select</option>
                      @foreach ($farmer as $a)
                        <option value={{ $a->id }}>{{ $a->name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div >
              <div >
                <label for="date_semis"  "mb-2 text-gray-700">Date Semis</label>
                <input type="date" class="form-control
                  focus:text-gray-700 focus:bg-white focus:outline-none" name="date_semis" id="date_semis"
                  aria-label="Date Semis" placeholder=" ">
              </div>
              <div>
                <label for="date_anticipe_recolte"  "mb-2 text-gray-700">Date  Recolte</label>
                <input type="date" class="form-control
                  focus:text-gray-700 focus:bg-white  focus:outline-none" name="date_anticipe_recolte" id="date_anticipe_recolte"
                  aria-label="Date  Recolte" placeholder=" ">
              </div>
            </div>
        </div>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button"
            class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="submit"
            class="inline-block px-6 py-2.5 bg-brown-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-brow-700 hover:shadow-lg focus:bg-brown-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-brown-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>