# Architecture

The core is an append-oriented business history model.

Core concepts:
- Actor
- Action
- Subject
- Change set
- Context
- Timestamp
- Correlation ID
- Causation ID
- Redaction policy

The core must not depend on Eloquent or Doctrine. Framework integrations translate framework events into core history records.

History is immutable after recording. Corrections are represented as new actions, never silent edits.

Sensitive fields and secrets must be excluded or redacted through explicit policies.
