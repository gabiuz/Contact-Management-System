<x-admin-layout>
  <div class="space-y-6">
    <!-- Page Title -->
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="grid lg:grid-cols-1 xl:grid-cols-3 gap-6">
      <!-- Total Contacts Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Total Contacts</p>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ $totalContacts }}</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z"
                  fill="#00B69B" />
              </svg>
              @php $contactsUp = $contactsPercent >= 0; @endphp

              <span class="whitespace-nowrap text-xs sm:text-sm font-medium {{ $contactsUp ? 'text-teal-500' : 'text-red-500' }}">
                {{ $contactsUp ? '+' : '' }}{{ number_format($contactsPercent, 1) }}%
              </span>
              <span class="whitespace-nowrap text-xs sm:text-sm text-gray-500">
                {{ $contactsUp ? 'Up from Last Week' : 'Down from Last Week' }}
              </span>
            </div>
          </div>
          <svg class="flex-shrink-0" width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21"
              d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z"
              fill="#215195" />
            <path opacity="0.587821"
              d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z"
              fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z"
              fill="#215195" />
          </svg>
        </div>
      </div>

      <!-- Total Sales Rep Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Total Sales Rep</p>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ $totalSalesReps }}</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z"
                  fill="#00B69B" />
              </svg>
              <span
                class="whitespace-nowrap text-xs sm:text-sm font-medium {{ str_starts_with($salesRepsDeltaLabel, '-') ? 'text-red-500' : 'text-teal-500' }}">
                {{ $salesRepsDeltaLabel }}
              </span>
              <span class="whitespace-nowrap text-xs sm:text-sm text-gray-500">
                vs last week
              </span>
            </div>
          </div>
          <svg class="flex-shrink-0" width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21"
              d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z"
              fill="#215195" />
            <path opacity="0.587821"
              d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z"
              fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z"
              fill="#215195" />
          </svg>
        </div>
      </div>

      <!-- Active Clients Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Active Clients</p>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ $activeClients }}</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z"
                  fill="#00B69B" />
              </svg>
              @php $isUp = $activePercent >= 0; @endphp

              <span class="whitespace-nowrap text-xs sm:text-sm font-medium {{ $isUp ? 'text-teal-500' : 'text-red-500' }}">
                {{ $isUp ? '+' : '' }}{{ number_format($activePercent, 1) }}%
              </span>
              <span class="whitespace-nowrap text-xs sm:text-sm text-gray-500">
                {{ $isUp ? 'Up from Last Week' : 'Down from Last Week' }}
              </span>
            </div>
          </div>
          <svg class="flex-shrink-0" width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21"
              d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z"
              fill="#215195" />
            <path opacity="0.587821"
              d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z"
              fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z"
              fill="#215195" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Name Cards Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Top Performing Sales Representative -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Top Performing Sales Representative</p>
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">
              {{ $topRep ? ($topRep->first_name . ' ' . $topRep->last_name) : '—' }}
            </h3>
          </div>
          <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21"
              d="M53 0C65.7025 0 76 10.2975 76 23V53C76 65.7025 65.7025 76 53 76H23C10.2975 76 3.2215e-07 65.7025 0 53V23C0 10.2975 10.2975 3.22129e-07 23 0H53Z"
              fill="#3888FB" />
            <path
              d="M24.2073 51.7927H53.7629C54.8511 51.7927 55.7333 52.6748 55.7333 53.763C55.7333 54.8512 54.8511 55.7334 53.7629 55.7334H22.237C21.1488 55.7334 20.2666 54.8512 20.2666 53.763V22.2371C20.2666 21.1489 21.1488 20.2667 22.237 20.2667C23.3252 20.2667 24.2073 21.1489 24.2073 22.2371V51.7927Z"
              fill="#3888FB" />
            <path opacity="0.5"
              d="M31.556 43.2883C30.8118 44.0822 29.5648 44.1224 28.771 43.3782C27.9771 42.6339 27.9368 41.387 28.6811 40.5931L36.07 32.7116C36.7898 31.9438 37.9859 31.8772 38.7865 32.5604L44.6182 37.5368L52.2165 27.9124C52.8908 27.0583 54.1298 26.9125 54.9839 27.5868C55.8381 28.2611 55.9838 29.5001 55.3095 30.3542L46.4429 41.5853C45.7503 42.4626 44.4675 42.5887 43.6173 41.8632L37.6588 36.7787L31.556 43.2883Z"
              fill="#3888FB" />
          </svg>
        </div>
      </div>

      <!-- Most Active Agent -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Most Active Agent</p>
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">
              {{ $mostActiveRep ? ($mostActiveRep->first_name . ' ' . $mostActiveRep->last_name) : '—' }}
            </h3>
          </div>
          <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21"
              d="M53 0C65.7025 0 76 10.2975 76 23V53C76 65.7025 65.7025 76 53 76H23C10.2975 76 3.2215e-07 65.7025 0 53V23C0 10.2975 10.2975 3.22129e-07 23 0H53Z"
              fill="#3888FB" />
            <path
              d="M24.2073 51.7927H53.7629C54.8511 51.7927 55.7333 52.6748 55.7333 53.763C55.7333 54.8512 54.8511 55.7334 53.7629 55.7334H22.237C21.1488 55.7334 20.2666 54.8512 20.2666 53.763V22.2371C20.2666 21.1489 21.1488 20.2667 22.237 20.2667C23.3252 20.2667 24.2073 21.1489 24.2073 22.2371V51.7927Z"
              fill="#3888FB" />
            <path opacity="0.5"
              d="M31.556 43.2883C30.8118 44.0822 29.5648 44.1224 28.771 43.3782C27.9771 42.6339 27.9368 41.387 28.6811 40.5931L36.07 32.7116C36.7898 31.9438 37.9859 31.8772 38.7865 32.5604L44.6182 37.5368L52.2165 27.9124C52.8908 27.0583 54.1298 26.9125 54.9839 27.5868C55.8381 28.2611 55.9838 29.5001 55.3095 30.3542L46.4429 41.5853C45.7503 42.4626 44.4675 42.5887 43.6173 41.8632L37.6588 36.7787L31.556 43.2883Z"
              fill="#3888FB" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Bottom Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Clients Per Sales Rep Chart -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Clients Per Sales Rep</h3>
        <div class="flex flex-col md:flex-row items-center justify-center">
          <div class="w-48 h-48 sm:w-64 sm:h-64">
            <canvas id="clientsPerRepChart"></canvas>
          </div>
          <div class="mt-6 md:mt-0 md:ml-8 space-y-3">
            @foreach($clientsPerRep as $rep)
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full" style="background: {{ $rep->chart_color }}"></span>
              <span class="text-sm text-gray-700">{{ $rep->first_name }} {{ $rep->last_name }}</span>
              <span class="text-sm font-semibold text-gray-900 ml-auto">{{ $rep->contacts_count }}</span>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Preferred Contact Chart -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Preferred Contact</h3>
        <div class="h-48 sm:h-64">
          <canvas id="preferredContactChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  @php
  $repLabels = $clientsPerRep->map(fn($r) => $r->first_name . ' ' . $r->last_name)->values();
  $repCounts = $clientsPerRep->pluck('contacts_count')->values();
  @endphp

  <!-- Chart.js Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const reps = @json($clientsPerRep);
    // Clients Per Sales Rep Doughnut Chart
    const clientsPerRepCtx = document.getElementById('clientsPerRepChart').getContext('2d');

    const repLabels = @json($repLabels);
    const repCounts = @json($repCounts);
    const repColors = reps.map(r => r.chart_color);

    // Create gradients for each segment
    new Chart(clientsPerRepCtx, {
      type: 'doughnut',
      data: {
        labels: repLabels,
        datasets: [{
          data: repCounts,
          backgroundColor: repColors,
          borderWidth: 4,
          borderColor: '#ffffff',
          cutout: '55%',
          spacing: 2,
          borderRadius: 8
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return context.label + ': ' + context.parsed + ' clients';
              }
            }
          }
        }
      }
    })

    //Preferred Contact Chart Data
    const preferredContactData = @json($preferredContactData);
    const preferredLabels = ['Email', 'Call', 'WhatsApp', 'Viber', 'SMS/Text'];
    const preferredKeys = ['email', 'call', 'whatsapp', 'viber', 'sms'];

    const preferredCounts = preferredKeys.map(k => preferredContactData[k] ?? 0);

    const preferredColors = {
      'email': '#1f2937',
      'call': '#2563eb',
      'whatsapp': '#22c55e',
      'viber': '#7c3aed',
      'sms': '#9ca3af',
    };

    const preferredBg = preferredKeys.map(k => preferredColors[k]);
    // Preferred Contact Bar Chart
    const preferredContactCtx = document.getElementById('preferredContactChart').getContext('2d');

    new Chart(preferredContactCtx, {
      type: 'bar',
      data: {
        labels: preferredLabels,
        datasets: [{
          data: preferredCounts,
          backgroundColor: preferredBg,
          borderRadius: {
            topLeft: 10,
            topRight: 10,
            bottomLeft: 10,
            bottomRight: 10
          },
          borderSkipped: false,
          barThickness: 40
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return 'Contacts: ' + context.parsed.y;
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              display: false,
              drawBorder: false
            },
            border: {
              display: false
            },
            ticks: {
              color: '#9ca3af'
            }
          },
          x: {
            grid: {
              display: false,
              drawBorder: false
            },
            border: {
              display: false
            },
            ticks: {
              color: '#9ca3af'
            }
          }
        }
      }
    });
  </script>
</x-admin-layout>