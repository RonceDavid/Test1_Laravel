<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="newPlantModal" tabindex="-1" aria-labelledby="newPlantModalTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <form method="POST" action="{{ route('Farmer.store') }}" class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
            New Farmer
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
            @csrf
            <div class="form-group mb-6">
              <input type="text" class="form-control block
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" id="name"
                placeholder="name">
            </div>
            <div class="form-group mb-6">
              <input type="email" class="form-control block
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" id="email"
                placeholder="Email">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-8">
                  <select class="form-select appearance-none
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    required
                    name="sexe" id="sexe"
                    aria-label="Sexe">
                      <option value="">Sexe</option>
                      <option value="Homme">Masculin</option>
                      <option value="Femme">Feminin</option>
                  </select>
              </div>
              <div class="form-group mb-4">
                <input type="number" class="form-control
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="age" id="age"
                  aria-label="Age" placeholder="Age">
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="telephone" id="telephone"
                  aria-label="Téléphone" placeholder="Téléphone">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="whatsapp" id="whatsapp"
                  aria-label="WhatsApp" placeholder="WhatsApp">
              </div>
            </div>
            <div class="form-group mb-6">
              <input type="text" class="form-control block
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="source" id="source"
                placeholder="Source">
            </div>
            <div class="form-group mb-6">
              <textarea
                class="
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="biographie"
                name="biographie"
                rows="3"
                placeholder="Biographie"
              ></textarea>
            </div>
        </div>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button"
            class="inline-block px-6 py-2.5 bg-brown-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-brown-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-brown-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="submit"
            class="inline-block px-6 py-2.5 bg-pink-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-pink-700 hover:shadow-lg focus:bg-pink-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>