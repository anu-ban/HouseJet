using ClinentInfo.Model;
using ClinentInfo.Services.SunSolarApp.Services;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace ClinentInfo.Controllers
{

    [Route("api/[controller]")]
    [ApiController]
    public class ClientController : ControllerBase
    {
        private readonly IClientService _clientService;

        public ClientController(IClientService clientService)
        {
            _clientService = clientService;
        }

        // GET: api/Client
        [HttpGet]
        public IActionResult GetClients()
        {
            var clients = _clientService.GetClients();
            return Ok(clients);
        }

        // POST: api/Client
        [HttpPost]
        public IActionResult CreateClient(ClientModel client)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var createdClient = _clientService.CreateClient(client);
            return CreatedAtAction(nameof(GetClientById), new { id = createdClient.ClientID }, createdClient);
        }

        // GET: api/Client/{id}
        [HttpGet("{id}")]
        public IActionResult GetClientById(int id)
        {
            var client = _clientService.GetClientById(id);
            if (client == null)
            {
                return NotFound();
            }

            return Ok(client);
        }

        // PUT: api/Client/{id}
        [HttpPut("{id}")]
        public IActionResult UpdateClient(int id, ClientModel client)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var updatedClient = _clientService.UpdateClient(id, client);
            if (updatedClient == null)
            {
                return NotFound();
            }

            return Ok(updatedClient);
        }

        // DELETE: api/Client/{id}
        [HttpDelete("{id}")]
        public IActionResult DeleteClient(int id)
        {
            var deletedClient = _clientService.DeleteClient(id);
            if (deletedClient == null)
            {
                return NotFound();
            }

            return Ok(deletedClient);
        }
    }
}
