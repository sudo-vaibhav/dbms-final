
<?php 
require "./header.php";
?>
  <section class="text-gray-700 body-font relative">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
          Add an FIR
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          File an FIR against multiple criminals
        </p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Fir Number</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="FIR Number"
            />
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Date of FIR</label
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
            >Last Name</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <select
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Jobs"
            >
            <option value="">Murder</option>
              <option value="">Rape</option>
              <option value="">Theft</option>
              <option value="">Fraud</option>
</select>
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Officer ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
            />
          </div>
        </div>
          <div class="p-2 w-full">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Description</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <textarea
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block"
              placeholder="Description"
            ></textarea>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-700 body-font relative">
  <div class="container px-5 my-5 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1
        class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
      >
        Add a Prisoner
      </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        Add a prisoner to the system
      </p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >First Name</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Steve"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Last Name</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Jobs"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Date in</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Date Out</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >DOB</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Height(in cms)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Address</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Section ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>

        <div class="p-2 w-full">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Description</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <textarea
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block"
              placeholder="Description"
            ></textarea>
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