<x-sales-rep-layout>
  <div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Total Contacts Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Total Contacts</p>
            <h3 class="text-4xl font-bold text-gray-900">500</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z" fill="#00B69B" />
              </svg>
              <span class="text-sm font-medium text-teal-500">8.5%</span>
              <span class="text-sm text-gray-500">Up from Last Week</span>
            </div>
          </div>
          <svg width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21" d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z" fill="#215195" />
            <path opacity="0.587821" d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z" fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z" fill="#215195" />
          </svg>
        </div>
      </div>

      <!-- New Contacts This Week Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">New Contacts (This Week)</p>
            <h3 class="text-4xl font-bold text-gray-900">200</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z" fill="#00B69B" />
              </svg>
              <span class="text-sm font-medium text-teal-500">+40</span>
              <span class="text-sm text-gray-500">added this week</span>
            </div>
          </div>
          <svg width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21" d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z" fill="#215195" />
            <path opacity="0.587821" d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z" fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z" fill="#215195" />
          </svg>
        </div>
      </div>

      <!-- Active Clients Card -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600 mb-2">Active Clients</p>
            <h3 class="text-4xl font-bold text-gray-900">500</h3>
            <div class="flex items-center gap-1 mt-3">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7249 7.41602L22.548 10.2465L16.5319 16.2783L11.6006 11.3342L2.46533 20.5055L4.20361 22.2483L11.6006 14.8322L16.5319 19.7763L24.2987 12.0017L27.1218 14.8322V7.41602H19.7249Z" fill="#00B69B" />
              </svg>
              <span class="text-sm font-medium text-teal-500">8.5%</span>
              <span class="text-sm text-gray-500">Up from Last Week</span>
            </div>
          </div>
          <svg width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.21" d="M50.9697 0C63.6722 0.000138887 73.9697 10.2975 73.9697 23V51.1611C73.9697 63.8636 63.6722 74.161 50.9697 74.1611H23C10.2975 74.1611 0 63.8637 0 51.1611V23C9.2858e-06 10.2975 10.2975 0 23 0H50.9697Z" fill="#215195" />
            <path opacity="0.587821" d="M46.8475 30.4886C49.571 30.4887 51.7792 32.7025 51.7792 35.433C51.779 38.1634 49.5709 40.3773 46.8475 40.3773C44.1241 40.3773 41.916 38.1634 41.9159 35.433C41.9159 32.7024 44.1241 30.4886 46.8475 30.4886ZM32.0536 22.2484C35.6847 22.2485 38.6286 25.1997 38.6288 28.8402C38.6288 32.4809 35.6848 35.4329 32.0536 35.433C28.4223 35.433 25.4784 32.4809 25.4784 28.8402C25.4786 25.1996 28.4224 22.2484 32.0536 22.2484Z" fill="#215195" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.0263 38.7289C39.8964 38.7289 46.362 42.5085 46.8437 50.5951C46.8629 50.9176 46.8437 51.9134 45.6093 51.9135H18.456C18.0438 51.9135 17.226 51.0216 17.2607 50.5931C17.898 42.7278 24.2655 38.7289 32.0263 38.7289ZM46.1924 42.0277C51.7916 42.0893 56.3629 44.9259 56.707 50.9242C56.7209 51.1658 56.7072 51.9135 55.8154 51.9135H49.4775C49.4775 48.2044 48.2548 44.7817 46.1924 42.0277Z" fill="#215195" />
          </svg>
        </div>
      </div>
    </div>

    <!-- New Contacts Over Time Chart -->
    <div class="bg-white rounded-lg shadow-sm p-6">
      <div class="flex items-center gap-6 mb-6">
        <h3 class="text-base font-semibold text-gray-900">New Contacts Over Time</h3>
        <div class="h-5 w-px bg-gray-300"></div>
        <div class="flex gap-4">
          <div class="flex items-center gap-2 text-sm text-gray-700">
            <span class="w-2 h-2 rounded-full bg-gray-900"></span>
            <span>This year</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-400">
            <span class="w-2 h-2 rounded-full bg-blue-500"></span>
            <span>Last year</span>
          </div>
        </div>
      </div>
      <div class="h-64">
        <canvas id="contactsChart"></canvas>
      </div>
    </div>

    <!-- Bottom Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Client Type Chart -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Client Type</h3>
        <div class="flex items-center justify-center">
          <div class="w-64 h-64">
            <canvas id="clientTypeChart"></canvas>
          </div>
          <div class="ml-8 space-y-3">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-gray-900"></span>
              <span class="text-sm text-gray-700">Buyer</span>
              <span class="text-sm font-semibold text-gray-900 ml-auto">52.1%</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-gray-600"></span>
              <span class="text-sm text-gray-700">Seller</span>
              <span class="text-sm font-semibold text-gray-900 ml-auto">22.8%</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-blue-400"></span>
              <span class="text-sm text-gray-700">Renter</span>
              <span class="text-sm font-semibold text-gray-900 ml-auto">13.9%</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-blue-600"></span>
              <span class="text-sm text-gray-700">Investor</span>
              <span class="text-sm font-semibold text-gray-900 ml-auto">11.2%</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Preferred Contact Chart -->
      <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Preferred Contact</h3>
        <div class="h-64">
          <canvas id="preferredContactChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Chart.js Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // New Contacts Over Time Line Chart
    const contactsCtx = document.getElementById('contactsChart').getContext('2d');
    new Chart(contactsCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'This year',
          data: [120, 130, 145, 160, 175, 190, 200],
          borderColor: '#1f2937',
          backgroundColor: 'transparent',
          tension: 0.4,
          borderWidth: 2,
          pointRadius: 0,
          pointHoverRadius: 5,
        }, {
          label: 'Last year',
          data: [80, 95, 100, 115, 125, 140, 155],
          borderColor: '#3b82f6',
          backgroundColor: 'transparent',
          tension: 0.4,
          borderWidth: 2,
          pointRadius: 0,
          pointHoverRadius: 5,
          borderDash: [5, 5]
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
            mode: 'index',
            intersect: false,
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: '#f3f4f6',
              drawBorder: false
            },
            ticks: {
              stepSize: 50,
              color: '#9ca3af'
            }
          },
          x: {
            grid: {
              display: false,
              drawBorder: false
            },
            ticks: {
              color: '#9ca3af'
            }
          }
        },
        interaction: {
          mode: 'nearest',
          axis: 'x',
          intersect: false
        }
      }
    });

    // Client Type Doughnut Chart
    const clientTypeCtx = document.getElementById('clientTypeChart').getContext('2d');

    // Create gradients for each segment
    const buyerGradient = clientTypeCtx.createLinearGradient(0, 0, 0, 400);
    buyerGradient.addColorStop(0, '#1f2937');
    buyerGradient.addColorStop(1, '#4b5563');

    const sellerGradient = clientTypeCtx.createLinearGradient(0, 0, 0, 400);
    sellerGradient.addColorStop(0, '#3b82f6');
    sellerGradient.addColorStop(1, '#93c5fd');

    const renterGradient = clientTypeCtx.createLinearGradient(0, 0, 0, 400);
    renterGradient.addColorStop(0, '#1e40af');
    renterGradient.addColorStop(1, '#60a5fa');

    const investorGradient = clientTypeCtx.createLinearGradient(0, 0, 0, 400);
    investorGradient.addColorStop(0, '#93c5fd');
    investorGradient.addColorStop(1, '#dbeafe');

    new Chart(clientTypeCtx, {
      type: 'doughnut',
      data: {
        labels: ['Buyer', 'Seller', 'Renter', 'Investor'],
        datasets: [{
          data: [52.1, 22.8, 13.9, 11.2],
          backgroundColor: [buyerGradient, sellerGradient, renterGradient, investorGradient],
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
                return context.label + ': ' + context.parsed + '%';
              }
            }
          }
        }
      }

    });

    // Preferred Contact Bar Chart
    const preferredContactCtx = document.getElementById('preferredContactChart').getContext('2d');
    new Chart(preferredContactCtx, {
      type: 'bar',
      data: {
        labels: ['Email', 'Call', 'WhatsApp', 'Viber', 'SMS/Text'],
        datasets: [{
          data: [85, 180, 110, 200, 60],
          backgroundColor: ['#1f2937', '#2563eb', '#1f2937', '#60a5fa', '#9ca3af'],
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
              stepSize: 50,
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
</x-sales-rep-layout>