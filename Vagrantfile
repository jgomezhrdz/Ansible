Vagrant.configure("2") do |config|

    config.vm.box = "ubuntu/bionic64"
  
    config.vm.define 'server' do |machine|
        machine.vm.network "private_network", ip: "172.17.177.11"
 
        machine.vm.provision :ansible_local do |ansible|
           ansible.playbook       = "ansibleWordpress/main.yml"
           ansible.verbose        = true
           ansible.install        = true
           ansible.limit          = "all" # or only "nodes" group, etc.
           ansible.inventory_path = "ansibleWordpress/inventory"
        end
    end
end
  