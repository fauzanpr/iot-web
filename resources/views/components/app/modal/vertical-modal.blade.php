{{-- <form action="/app/setup/vertical" method="POST">
    @csrf
    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        id="modal-add-value-vertical">
        <!--
      Background backdrop, show/hide based on modal state.
  
      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-100 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start mb-4">
                            <p class="text-lg font-semibold">Edit Vertical Value</p>
                        </div>
                        <div>
                            <label for="vertical" class="block mb-2">Vertical Value</label>
                            <input required type="number" id="vertical" name="vertical" min="50" max="110" placeholder="Input Vertical Value"
                                class="block p-2 border w-full rounded-lg placeholder:font-light placeholder:italic">
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit"
                            class="inline-flex w-full justify-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 sm:ml-3 sm:w-auto">Submit</button>
                        <button type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                            onclick="handleClickVerticalButton()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> --}}

<form action="/app/setup/vertical" method="POST">
    @csrf
    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        id="modal-add-value-vertical">
        
        <!-- Modal Backdrop -->
        <div class="fixed inset-0 bg-gray-100 bg-opacity-75 transition-opacity overflow-hidden" aria-hidden="true"></div>

        <!-- Modal Wrapper -->
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                
                <!-- Modal Content -->
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full max-w-sm sm:max-w-lg sm:my-8">
                    
                    <!-- Modal Body -->
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start mb-4">
                            <p class="text-lg font-semibold">Edit Vertical Value</p>
                        </div>
                        <div>
                            <label for="vertical" class="block mb-2">Vertical Value</label>
                            <input required type="number" id="vertical" name="vertical" min="50" max="110"
                                placeholder="Input Vertical Value"
                                class="block w-full p-2 border rounded-lg placeholder:font-light placeholder:italic">
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit"
                            class="inline-flex w-full justify-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 sm:ml-3 sm:w-auto">Submit</button>
                        <button type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                            onclick="handleClickVerticalButton()">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
