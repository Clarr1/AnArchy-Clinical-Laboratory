document.addEventListener('DOMContentLoaded', () => {
    function load_appointments() {
        fetch('/AnArchyClinical-Laboratory/admin/appointment-list?ajax=1')
            .then(response => response.json())
            .then(data => {
                let html = '';

                data.forEach(row => {
                    html += `
                        <tr class="hover:bg-gray-100 hover:scale-[1.01] transition transform duration-200">
                            <td class="px-6 py-4">${row.fname}</td>
                            <td class="px-6 py-4">${row.lname}</td>
                            <td class="px-6 py-4">${row.mname}</td>
                            <td class="px-6 py-4">${row.appointment_status}</td>
                            <td class="px-6 py-4">
                                <a href="/AnArchyClinical-Laboratory/admin/appointment-details?appointment_id=${row.appointment_id}">
                                    View more
                                </a>
                            </td>
                        </tr>
                    `;
                });

                document.getElementById('appointment_table').innerHTML = html;
            });
    }

    // Load immediately
    load_appointments();

    // Refresh every 3 seconds
    setInterval(load_appointments, 3000);
});
