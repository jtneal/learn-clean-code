# Case Study: Pricing Calculator

## Design Patterns:
* Strategy
* Abstract Factory
* Bridge
* Chain of Responsibility

## Design Principles:
* Single Responsibility Principle
* Open/Closed Principle
* Dependency Inversion Principle
* Interface Segregation Principle
* Polymorphism
* Low Coupling
* DRY

##Overview of Pricing Calculator:
The customer defines various pricing rules based on product SKUs. They begin
with two or three rules, but know that more are coming in the near future.

##Design Process
I was tempted to start with a switch/case statement that simply handled all of
the logic in a single file. However, we all know where this ends up - spaghetti
code! I decided this made the most sense using a Bridge type of pattern such as
Chain of Responsibility.

This way, adding new pricing rules is as simple as adding a single file. Of
course, you still have to add the pricing rule to the list of rules. Where
would this list of rules be stored? I could have just defined it in my
PricingCalculator, but I wanted to avoid the coupling.

I decided to utilize the Abstract Factory method. The idea behind this was
that perhaps one day an entire new ruleset would be introduced for a sales
event, or something of that nature where I would still want to keep the
existing ruleset. Then, I placed the ruleset in the factory and just pulled
this from the dependency-injected factory in the PricingCalculator.

I am pretty happy with the resulting application. Of course nothing is ever
perfect, and even now I can think of a few changes I might make, but overall
I am satisfied with the outcome of the case study.
