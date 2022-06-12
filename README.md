# PadTaniCC

Hello!
So what we do in this project?
1. Create Restful API in Laravel
2. Make VM Instances and setting the VM with this parameter
    
    VM Name : padtani-caps
    
    Region : asia-southeast1 // for better connection, choose the near server region around you
    
    Zone : asia-southeast2-b
    
    Machine series : N1
    
    Machine type : f1-micro (1 vCPU, 614 MB memory) // we just need small server for stream
    
    Boot Disk : Ubuntu 20.04 LTS // you can choose anything for system operation
    
    Checklist Allow HTTP traffic & Allow HTTPS traffic

3. Upload database to CloudStorage
4. Import database to CloudSQL
    
    Click import, choose file ".sql" from cloud storage.
    
5. Connecting database to VM Instances
    Go to connections in Cloud SQL, check the "Public IP"
    
    Add Network use name "mysql-padtani" and Network fill with the External IP of VM Instances.
    
6. Deploy the API to VM Instances
    
    References to Deploy Laravel API to VM Instances : https://techvblogs.com/blog/deploy-laravel-project-apache-ubuntu
