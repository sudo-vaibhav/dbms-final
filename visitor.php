<?php 
require "./header.php";
?>
  <section class="text-gray-700 body-font relative">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
        Visitor Registration
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          Enroll yourself as a Visitor!
        </p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <label class="block text-sm leading-5 font-medium text-gray-700"
              >First Name</label
            >
            <div class="mt-1 relative rounded-md shadow-sm w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
            placeholder="Jobs">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <label class="block text-sm leading-5 font-medium text-gray-700"
              >Last Name</label
            >
            <div class="mt-1 relative rounded-md shadow-sm w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
            placeholder="Jobs">
            </div>
          </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Date and Time of Visit</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
                type="date"
            />
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Prisoner ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
            />
          </div>
        </div>
          <div class="p-2 w-full">
            <button
              class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
require "./footer.php";
?>