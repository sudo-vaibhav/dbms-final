<link
  href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
  rel="stylesheet"
/>
<body>
  <section class="text-gray-700 body-font relative">
    <div class="container px-5 py-24 mx-auto">
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
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
              placeholder="Fir Number"
              type="text"
            />
          </div>
          <div class="p-2 w-1/2">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
              type="date"
            />
          </div>
          <div class="p-2 w-1/2">
            <select
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
            >
              <option value="">Murder</option>
              <option value="">Rape</option>
              <option value="">Theft</option>
              <option value="">Fraud</option>
            </select>
          </div>
          <div class="p-2 w-1/2">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
              type="text"
              placeholder="Officer Id"
            />
          </div>
          <div class="p-2 w-full">
            <textarea
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block"
              placeholder="Description"
            ></textarea>
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
  <footer class="text-gray-700 body-font">
    <div class="bg-gray-200">
      <div
        class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col"
      >
        <a
          class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
            ></path>
          </svg>
          <span class="ml-3 text-xl">Prison Management System</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">
          © 2020 — Neel, Deepesh & Vaibhav
        </p>
        <span
          class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
        >
          <a class="text-gray-500"> Made with ❤️ </a>
        </span>
      </div>
    </div>
  </footer>
</body>
