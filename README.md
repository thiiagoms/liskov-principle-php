Case Study: Liskov Substitution Principle (LSP)
===============================================

Overview
--------

This case study explores the implementation of the **Liskov Substitution Principle (LSP)** in a PHP application. LSP, one of the five SOLID design principles, states that objects of a superclass should be replaceable with objects of a subclass without affecting the correctness of the program. Adhering to LSP ensures that a derived class can stand in for its base class without altering the expected behavior of the system.

Problem Statement
-----------------

The original codebase had a Mechanic class that violated the LSP by being tightly coupled to a specific Mercedes class:

*   The Mechanic class could only fix Mercedes vehicles, making it rigid and non-extensible.
    
*   Adding new vehicle types required modifying the Mechanic class, which increased the risk of introducing bugs and made the system harder to maintain.
    

This design violated LSP because it required changes to the existing Mechanic class whenever a new type of vehicle was introduced. This made the code less maintainable, harder to extend, and more prone to errors.

Refactoring Process
-------------------

To comply with LSP, we refactored the Mechanic class by introducing a VehicleService hierarchy. Each specific vehicle class (e.g., MercedesService, AudiService) extends from a common base or implements a shared interface. The MechanicService class now operates on the base class or interface, making it open to fixing any type of vehicle without needing to be modified for each new vehicle type.

*   **Original Implementation**: [https://github.com/thiiagoms/lsp-principle-php/commit/2452edbc4eff18faeb597bfeca8f4447a3b5c0bf](#)
    
*   **Refactored Implementation**: [https://github.com/thiiagoms/lsp-principle-php/commit/54e76ef6c7ddde7bdee5211a9c4988a087bebcad](#)

Benefits of LSP
---------------

### 1\. **Maintainability**

*   The code is easier to maintain because the MechanicService class no longer needs to be modified when new vehicle types are added. New vehicles can be introduced by extending a base class or implementing a shared interface.
    

### 2\. **Testability**

*   Each vehicle type can be tested independently, and the MechanicService can be tested in isolation without worrying about the specifics of each vehicle implementation.
    

### 3\. **Flexibility**

*   The application is more flexible and can easily accommodate new vehicle types without affecting the existing functionality, adhering to the Liskov Substitution Principle.
    

### 4\. **Readability**

*   The code is more readable because the logic for fixing each vehicle type is encapsulated within the vehicle service classes themselves, making the MechanicService focused and straightforward.
    

Use Application
---------------

Use application:
----------------
```bash
$ git clone https://github.com/thiiagoms/liskov-principle-php
$ cd liskov-principle-php
liskov-principle-php $ docker-compose up -d
liskov-principle-php $ docker-compose exec app bash
thiiagoms@612c8b2c8101:/var/www$ composer install -vvv
thiiagoms@612c8b2c8101:/var/www$ php app.php
```