<div id="{{ isset($id) ? $id : 'modal' }}" class="modal fixed hidden z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            ¿What is the title of your project?
                        </h3>
                        <div class="mt-2">
                            <div class="flex w-full">
                                <input type="name" name="name" id="name" placeholder="Title" 
                                    class="w-full mt-2 p-3 rounded-lg bg-white dark:bg-gray-800 border 
                                    border-gray-400 dark:border-gray-700 text-gray-800 
                                    focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent 
                    shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto 
                    sm:text-sm">
                    Save
                </button>
                <button type="button" class="modal-close mt-3 w-full inline-flex justify-center rounded-md border 
                    border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 
                    hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 
                    sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>  
</div>