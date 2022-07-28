import os
import json

services_req = dict()
services = ['mysql', 'apache2', 'redis']

for service in services:
    status = os.system('systemctl is-active --quiet {}'.format(service))
    services_req["{}_service".format(service)] = 'Not_running' if status > 0 else 'running'

json_object = json.dumps(services_req, indent=4)

with open("services.json", "w") as outfile:
    outfile.write(json_object)
