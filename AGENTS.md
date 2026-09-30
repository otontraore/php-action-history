# Development guidance

Keep the domain model framework-agnostic. Laravel and Symfony/Doctrine integrations must be adapters around stable core contracts.

History is append-oriented. Never silently rewrite historical facts. Sensitive values must be configurable and redacted by default where appropriate.

Workflow:
- `main`: stable releases
- `dev`: integration
- `feature/*`: short-lived implementation branches
- no pull requests required
- releases are Git tags from `main`

Every public behavior requires automated tests and static analysis.
