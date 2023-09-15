using ClinentInfo.Model;

namespace ClinentInfo.Services
{
    namespace SunSolarApp.Services
    {
        public interface IClientService
        {
            IEnumerable<ClientModel> GetClients();
            ClientModel GetClientById(int id);
            ClientModel CreateClient(ClientModel client);
            ClientModel UpdateClient(int id, ClientModel client);
            ClientModel DeleteClient(int id);
        }

        public class ClientService : IClientService
        {
            private readonly List<ClientModel> _clients;

            public ClientService()
            {
                // Initialize the list of clients (can be replaced with database calls)
                _clients = new List<ClientModel>();
            }

            public IEnumerable<ClientModel> GetClients()
            {
                return _clients;
            }

            public ClientModel GetClientById(int id)
            {
                return _clients.FirstOrDefault(c => c.ClientID == id);
            }

            public ClientModel CreateClient(ClientModel client)
            {
                // Assign a new client ID
                var newClientId = _clients.Count > 0 ? _clients.Max(c => c.ClientID) + 1 : 1;
                client.ClientID = newClientId;

                _clients.Add(client);
                return client;
            }

            public ClientModel UpdateClient(int id, ClientModel client)
            {
                var existingClient = _clients.FirstOrDefault(c => c.ClientID == id);
                if (existingClient == null)
                {
                    return null;
                }

                existingClient.FirstName = client.FirstName;
                existingClient.LastName = client.LastName;
                existingClient.Address = client.Address;
                existingClient.PhoneNumber = client.PhoneNumber;

                return existingClient;
            }

            public ClientModel DeleteClient(int id)
            {
                var existingClient = _clients.FirstOrDefault(c => c.ClientID == id);
                if (existingClient == null)
                {
                    return null;
                }

                _clients.Remove(existingClient);
                return existingClient;
            }
        }
    }
}
