<?php 
require "./header.php";
?>
  <section class="text-gray-700 body-font relative">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
        Officer Update
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          The Officer can update information related to The Prisoner and Their FIRs
        </p>
      </div>
      <div class="flex flex-col text-center w-full mb-12">
        <h4
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
        Prisoner Date Out Updation
        </h4>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          Update the Date at which the Prisoner Leaves!
        </p>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-700 font-bold md:text-right mb-1 md:mb-0 pr-1" for="inline-prisoner-name">
            Prisoner Date Out
          </label>
        </div>
        <div class="md:w-1/3 mx-5">
          <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
                type="date"
            />
        </div>
        <div class="p-2">
          <button
            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
          >
            Submit
          </button>
        </div>
      </div>
      <section class="text-gray-700 body-font relative">
        <div class="container px-5 my-5 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h4
            class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
          >
          Add Prisoner Id to FIR
          </h4>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
            Add another FIR to a particular Prisoner!
          </p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <label class="block text-sm leading-5 font-bold text-gray-700"
                >FIR No</label
              >
              <div class="mt-1 relative rounded-md shadow-sm">
                <input
                  class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <label class="block text-sm leading-5 font-bold text-gray-700"
                >Prisoner ID</label
              >
              <div class="mt-1 relative rounded-md shadow-sm">
                <input
                  class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
                />
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <div class="p-2 w-full">
        <button
          class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
        >
          Submit
        </button>
      </div>
    </div>
  </section>
  <?php 
require "./footer.php";
?>